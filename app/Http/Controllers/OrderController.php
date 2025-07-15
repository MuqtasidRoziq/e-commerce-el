<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\CartItem;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $title = 'Daftar Pesanan';
        $orders = Order::with(['orderDetails.product', 'user'])
            ->orderBy('order_date', 'desc')
            ->get();
        return view('dashboard.orders.index', compact('title', 'orders'));
    }

    public function update(Request $request, $id)
    {
        // Validasi data
        $validated = $request->validate([
            'status' => 'required|string',
            'resi' => 'nullable|string|max:255',
        ]);

        // Ambil order-nya
        $order = Order::findOrFail($id);

        // Update status dan resi
        $order->status = $validated['status'];
        $order->resi = $validated['resi'];
        $order->save();

        return redirect()->back()->with('successMessage', 'Pesanan berhasil diperbarui.');
    }
}

