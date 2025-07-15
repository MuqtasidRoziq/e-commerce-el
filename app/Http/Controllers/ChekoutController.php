<?php

namespace App\Http\Controllers;
use Binafy\LaravelCart\Models\Cart;
use Binafy\LaravelCart\Models\CartItem;
use App\Models\Order;
use App\Models\OrderDetails;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

use Illuminate\Http\Request;

class ChekoutController extends Controller
{
    public function checkout()
    {
        $user = auth()->user();
        $cart = Cart::with(['items.itemable'])
            ->where('user_id', $user->id)
            ->first();

        // Cek apakah cart null atau kosong
        if (!$cart || $cart->items->isEmpty()) {
            return redirect()->route('cart.index')->with('error', 'Keranjang kosong!');
        }

        return view('web.checkout', [
            'title' => 'Checkout',
            'cart' => $cart
        ]);
    }

    public function store(Request $request)
    {
        $user = Auth::user();
        $cart = Cart::where('user_id', $user->id)->with('items.itemable')->first();

        if (!$cart || $cart->items->isEmpty()) {
            return back()->with('error', 'Keranjang kosong');
        }

        DB::beginTransaction();
        try {
            $totalAmount = 0;

            // Hitung total
            foreach ($cart->items as $item) {
                $totalAmount += $item->price * $item->quantity;
            }

            // Buat order
            $order = Order::create([
                'user_id' => $user->id,
                'order_date' => Carbon::now(),
                'total_amount' => $totalAmount,
                'status' => 'pending',
            ]);

            // Buat detail per item
            foreach ($cart->items as $item) {
                $product = $item->itemable;

                OrderDetails::create([
                    'order_id' => $order->id,
                    'product_id' => $product->id,
                    'quantity' => $item->quantity,
                    'unit_price' => $product->price,
                    'subtotal' => $product->price * $item->quantity,
                ]);
            }

            // Hapus isi cart
            $cart->items()->delete();
            $cart->delete();

            DB::commit();
            // return redirect()->route('orders.index')->with('success', 'Pesanan berhasil dibuat!');
            dd('success', 'Pesanan berhasil dibuat!'); // For debugging, replace with redirect in production
        } catch (\Exception $e) {
            DB::rollBack();
            // return back()->with('error', 'Terjadi kesalahan saat memproses pesanan: ' . $e->getMessage());
            dd('error', 'Terjadi kesalahan saat memproses pesanan: ' . $e->getMessage()); // For debugging, replace with redirect in production
        }
    }

}
