<?php

namespace App\Http\Controllers;

use Binafy\LaravelCart\Models\CartItem;
use Binafy\LaravelCart\Models\Cart;
use Illuminate\Http\Request;

use App\Models\Categories;
use App\Models\Product;

class HomepageController extends Controller
{

    public function countCart()
    {
        $total = 0;

        if (auth()->check()) {
            $total = CartItem::query()
                ->with('itemable')
                ->whereHas('cart', function ($query) {
                    $query->where('user_id', auth()->guard('web')->user()->id);
                })
                ->sum('quantity');
        }
        // dd($total);
        return view('components.cart-icon', compact('total'));

    }

    public function index()
    {
        $categories = Categories::all();
        $products = Product::withSum([
            'orderDetails as terjual' => function ($query) {
                $query->join('orders', 'orders.id', '=', 'order_details.order_id')
                    ->where('orders.status', 'completed'); // hanya hitung yang sudah selesai
            }
        ], 'quantity')->paginate(20);

        return view('web.homepage', [
            'categories' => $categories,
            'products' => $products,
            'title' => 'Homepage'
        ]);
    }

    public function products(Request $request)
    {
        $title = "Products";

        $query = Product::query();
        $categories = Categories::all();

        if ($request->has('search') && $request->search) {
            $query->where('name', 'like', '%' . $request->search . '%');
        }

        $products = $query->get();

        return view('web.products', [
            'title' => $title,
            'products' => $products,
            'categories' => $categories,
            'search' => $request->search ?? '',
        ]);
    }

    public function product($slug)
    {
        $product = Product::whereSlug($slug)->first();

        if (!$product) {
            return abort(404, 'produk tidak ditemukan');
        }

        $relatedProducts = Product::where('product_category_id', $product->product_category_id)
            ->where('id', '!=', $product->id)
            ->take(4)
            ->get();

        return view('web.product-details', [
            'slug' => $slug,
            'product' => $product,
            'relatedProducts' => $relatedProducts,
        ]);
    }

    public function categories()
    {
        $categories = Categories::all();
        $products = Product::withSum([
            'orderDetails as terjual' => function ($query) {
                $query->join('orders', 'orders.id', '=', 'order_details.order_id')
                    ->where('orders.status', 'completed'); // hanya hitung yang sudah selesai
            }
        ], 'quantity')->paginate(5);

        return view('web.categories', [
            'title' => 'Categories',
            'categories' => $categories,
            'products' => $products,
        ]);
    }

    public function category($slug)
    {
        $category = Categories::whereSlug($slug)->first();

        if ($category) {
            $products = Product::where('product_category_id', $category->id)->paginate(20);

            return view('web.category_by_slug', [
                'slug' => $slug,
                'category' => $category,
                'products' => $products,
            ]);
        } else {
            return abort(404);
        }
    }

    public function cart()
    {
        $cart = Cart::query()
            ->with(
                [
                    'items',
                    'items.itemable'
                ]
            )->where('user_id', auth()->guard('web')->user()->id)->first();

        return view('web.cart', [
            'title' => 'Cart',
            'cart' => $cart,
        ]);
    }
}
