<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Categories;
use App\Models\Product;

class HomepageController extends Controller
{

    public function index()
    {
        $categories = Categories::all();
        $products = Product::paginate(20);

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

        if ($request->has('search') && $request->search) {
            $query->where('name', 'like', '%' . $request->search . '%');
        }

        $products = $query->paginate(20);

        return view('web.products',[
            'title'=>$title,
            'products' => $products,
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
        $categories = Categories::latest()->paginate(20);

        return view('web.categories', [
            'title' => 'Categories',
            'categories' => $categories,
        ]);
    }

    public function category($slug)
    {
        $category = Categories::whereSlug($slug)->first();

        if ($category) {
            $products = Product::where('product_category_id', $category->id)->paginate(20);

            return view('.category_by_slug', [
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
        $dummyProduct1 = (object)[
        'id' => 1,
        'name' => 'iPhone 15 Pro',
        'price' => 19999000,
        'image_url' => 'https://www.apple.com/v/iphone/home/cb/images/overview/select/iphone_16pro__erw9alves2qa_xlarge_2x.png',
    ];

    $dummyProduct2 = (object)[
        'id' => 2,
        'name' => 'Samsung Galaxy S23 Ultra',
        'price' => 17999000,
        'image_url' => 'https://fdn2.gsmarena.com/vv/pics/samsung/samsung-galaxy-s23-ultra-1.jpg',
    ];

    // Dummy items
    $dummyCartItems = collect([
        (object)[
            'id' => 101,
            'quantity' => 1,
            'itemable' => $dummyProduct1,
        ],
        (object)[
            'id' => 102,
            'quantity' => 2,
            'itemable' => $dummyProduct2,
        ],
    ]);

    $total = $dummyCartItems->sum(function ($item) {
        return $item->itemable->price * $item->quantity;
    });

    // Simulasikan object cart
    $cart = (object)[
        'items' => $dummyCartItems,
        'total' => $total,
    ];
        return view('web.cart', [
            'title' => 'Cart',
            'cart' => $cart,
        ]);
    }

    public function checkout()
    {
        return view('web.checkout', [
            'title' => 'Checkout'
        ]);
    }
}
