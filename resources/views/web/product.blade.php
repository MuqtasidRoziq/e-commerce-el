@php
$categories = ['APPLE', 'SAMSUNG', 'VIVO', 'XIAOMI', 'REALME'];

$brandLogos = [
'APPLE' => 'https://upload.wikimedia.org/wikipedia/commons/f/fa/Apple_logo_black.svg',
'SAMSUNG' => 'https://upload.wikimedia.org/wikipedia/commons/2/24/Samsung_Logo.svg',
'VIVO' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/13/Vivo_logo_2019.svg/330px-Vivo_logo_2019.svg.png',
'XIAOMI' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/2/29/Xiaomi_logo.svg/512px-Xiaomi_logo.svg.png',
'REALME' => 'https://upload.wikimedia.org/wikipedia/commons/e/e6/Realme_logo_SVG.svg',
];

// Data dummy per kategori (bisa dikembangkan sendiri)
$dummyProducts = [
// APPLE
['name' => 'iPhone 13', 'price' => 13999000, 'image' => 'https://www.apple.com/v/iphone/home/cb/images/overview/select/iphone_16pro__erw9alves2qa_xlarge_2x.png', 'category' => 'APPLE'],
['name' => 'iPhone 14', 'price' => 15999000, 'image' => 'https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/iphone-14-select-202209-6-1inch_AV1?wid=940&hei=1112&fmt=png-alpha&.v=1661026279513', 'category' => 'APPLE'],
['name' => 'iPhone 15', 'price' => 18999000, 'image' => 'https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/iphone-15-finish-select-202309-6-7inch-pink?wid=560&hei=560&fmt=jpeg&qlt=90&.v=1692923763922', 'category' => 'APPLE'],
['name' => 'iPhone 13 Mini', 'price' => 12999000, 'image' => 'https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/iphone-13-mini-pink-select-2021?wid=470&hei=556&fmt=png-alpha&.v=1645572386471', 'category' => 'APPLE'],
['name' => 'iPhone SE 2022', 'price' => 8999000, 'image' => 'https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/iphone-se-2022-midnight-select?wid=470&hei=556&fmt=png-alpha&.v=1646415835922', 'category' => 'APPLE'],
['name' => 'iPhone 14 Pro Max', 'price' => 20999000, 'image' => 'https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/iphone-14-pro-max-deep-purple-select?wid=470&hei=556&fmt=png-alpha&.v=1663703841436', 'category' => 'APPLE'],

// SAMSUNG
['name' => 'Samsung S25 Ultra', 'price' => 24999000, 'image' => 'https://images.samsung.com/is/image/samsung/p6pim/id/2501/gallery/id-galaxy-s25-s938-sm-s938bzbcxid-thumb-544701608?$310_N_PNG$', 'category' => 'SAMSUNG'],
['name' => 'Samsung A54', 'price' => 5999000, 'image' => 'https://images.samsung.com/id/smartphones/galaxy-a/galaxy-a54-5g/images/galaxy-a54-5g_highlights_kv_img.jpg', 'category' => 'SAMSUNG'],
['name' => 'Samsung Z Flip 5', 'price' => 18999000, 'image' => 'https://images.samsung.com/is/image/samsung/p6pim/id/2307/gallery/id-galaxy-z-flip5-f731-457621-sm-f731blgaids-537636804?$650_519_PNG$', 'category' => 'SAMSUNG'],
['name' => 'Samsung M14', 'price' => 2899000, 'image' => 'https://images.samsung.com/id/smartphones/galaxy-m14/images/galaxy-m14_highlights_kv_img.jpg', 'category' => 'SAMSUNG'],
['name' => 'Samsung S23 FE', 'price' => 8999000, 'image' => 'https://images.samsung.com/is/image/samsung/p6pim/id/2310/gallery/id-galaxy-s23-fe-s711-sm-s711bzkvxid-537864120?$650_519_PNG$', 'category' => 'SAMSUNG'],
['name' => 'Samsung Note 20', 'price' => 13999000, 'image' => 'https://images.samsung.com/id/smartphones/galaxy-note20/images/galaxy-note20_highlights_kv_img.jpg', 'category' => 'SAMSUNG'],

// VIVO
['name' => 'Vivo X80 Pro', 'price' => 12999000, 'image' => 'https://th.bing.com/th/id/OIP.W7bzJOKwv7eDZiDOWJdDwgHaHa?rs=1&pid=ImgDetMain', 'category' => 'VIVO'],
['name' => 'Vivo V27 5G', 'price' => 5299000, 'image' => 'https://asia-exstatic-vivofs.vivo.com/PSee2l50xoirPK7y/1679634351153/6477d8b406ec5debd10c4b5a12abfc36.png', 'category' => 'VIVO'],
['name' => 'Vivo Y36', 'price' => 3299000, 'image' => 'https://asia-exstatic-vivofs.vivo.com/PSee2l50xoirPK7y/1686811108881/92f25d772b6b23b586a5a264a234a5c6.png', 'category' => 'VIVO'],
['name' => 'Vivo X70 Pro', 'price' => 10999000, 'image' => 'https://fdn2.gsmarena.com/vv/pics/vivo/vivo-x70-pro-plus-1.jpg', 'category' => 'VIVO'],
['name' => 'Vivo Y22', 'price' => 2499000, 'image' => 'https://asia-exstatic-vivofs.vivo.com/PSee2l50xoirPK7y/1679016433822/0e5b0dc723e1f984e3c3a17cfdf16291.png', 'category' => 'VIVO'],
['name' => 'Vivo V25 Pro', 'price' => 5799000, 'image' => 'https://asia-exstatic-vivofs.vivo.com/PSee2l50xoirPK7y/1663061994091/0b8dc476cf91a5c3b60977b2e8dbbb96.png', 'category' => 'VIVO'],

// XIAOMI
['name' => 'Xiaomi 15 Ultra', 'price' => 11999000, 'image' => 'https://th.bing.com/th/id/OIP.-IT2_zdKIZ3hHh0853WVvAHaHa?pid=ImgDet&w=185&h=185&c=7&dpr=1,3', 'category' => 'XIAOMI'],
['name' => 'Xiaomi Redmi Note 12', 'price' => 2999000, 'image' => 'https://fdn2.gsmarena.com/vv/pics/xiaomi/xiaomi-redmi-note-12-1.jpg', 'category' => 'XIAOMI'],
['name' => 'Xiaomi 12 Pro', 'price' => 8999000, 'image' => 'https://fdn2.gsmarena.com/vv/pics/xiaomi/xiaomi-12-pro-1.jpg', 'category' => 'XIAOMI'],
['name' => 'Xiaomi Poco X5', 'price' => 3899000, 'image' => 'https://fdn2.gsmarena.com/vv/pics/xiaomi/xiaomi-poco-x5-1.jpg', 'category' => 'XIAOMI'],
['name' => 'Xiaomi Mi 11', 'price' => 7899000, 'image' => 'https://fdn2.gsmarena.com/vv/pics/xiaomi/xiaomi-mi-11-1.jpg', 'category' => 'XIAOMI'],
['name' => 'Xiaomi Black Shark 5', 'price' => 10999000, 'image' => 'https://fdn2.gsmarena.com/vv/pics/xiaomi/black-shark-5-1.jpg', 'category' => 'XIAOMI'],

// REALME iniii
['name' => 'Realme GT7 Pro', 'price' => 10999000, 'image' => 'https://image01.realme.net/general/20250522/17478892761986a7207924f9449b59872dd5a19aed71c.png.webp?width=1080&height=1080&size=866353', 'category' => 'REALME'],
['name' => 'Realme 11 Pro+', 'price' => 5999000, 'image' => 'https://image01.realme.net/general/20230614/1686728fa37489137e839c4c327582f4.png.webp', 'category' => 'REALME'],
['name' => 'Realme Narzo 50', 'price' => 2899000, 'image' => 'https://fdn2.gsmarena.com/vv/pics/realme/realme-narzo-50-1.jpg', 'category' => 'REALME'],
['name' => 'Realme C55', 'price' => 2499000, 'image' => 'https://fdn2.gsmarena.com/vv/pics/realme/realme-c55-1.jpg', 'category' => 'REALME'],
['name' => 'Realme 10 Pro', 'price' => 3599000, 'image' => 'https://fdn2.gsmarena.com/vv/pics/realme/realme-10-pro-1.jpg', 'category' => 'REALME'],
['name' => 'Realme GT Neo 3', 'price' => 7299000, 'image' => 'https://fdn2.gsmarena.com/vv/pics/realme/realme-gt-neo3-1.jpg', 'category' => 'REALME'],
];
@endphp
<x-layout>
    <x-slot name="title"> {{$product->name}}</x-slot>

    @if(session('error'))
        <div class="container mt-4">
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    @endif

    <div class="container my-5">
        <div class="row g-5 align-items-start">
            <div class="col-md-6">
                <div class="bg-white shadow rounded p-3">
                    <img src="{{ $product->image_url ?? 'https://via.placeholder.com/500x500' }}" class="img-fluid rounded w-100" alt="{{ $product->name }}">
                </div>
                <div class="mt-3">
                    <span class="badge bg-secondary">{{ $product->category->name ?? 'Kategori Tidak Diketahui' }}</span>
                </div>
            </div>
            <div class="col-md-6">
                <h1 class="mb-2 fw-bold">{{ $product->name }}</h1>
                <div class="mb-3">
                    <span class="fs-4 text-success fw-semibold">Rp.{{ number_format($product->price, 0, ',', '.') }}</span>
                    @if($product->old_price)
                        <span class="text-muted text-decoration-line-through ms-2">Rp{{ number_format($product->old_price, 0, ',', '.') }}</span>
                    @endif
                </div>
                <div class="mb-4">
                    <p class="text-muted">{{ $product->description }}</p>
                </div>
                <form action="{{ route('cart.add') }}" method="POST" class="mb-4">
                    @csrf
                    <div class="input-group" style="max-width: 320px;">
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                        
                        <input type="number" name="quantity" class="form-control" value="1" min="1" max="{{ $product->stock }}">
                        <button class="btn btn-primary" type="submit">
                            <i class="bi bi-cart-plus me-1"></i> Tambah ke Keranjang
                        </button>
                    </div>
                </form>
                <ul class="list-group list-group-flush mb-4">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <span><strong>Stok:</strong></span>
                        <span class="{{ $product->stock > 0 ? 'text-success' : 'text-danger' }}">
                            {{ $product->stock > 0 ? $product->stock : 'Habis' }}
                        </span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <span><strong>Kategori:</strong></span>
                        <span>{{ $product->category->name ?? '-' }}</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12">
                <h4 class="mb-3">Deskripsi Produk</h4>
                <div class="bg-light p-4 rounded shadow-sm">
                    {!! nl2br(e($product->long_description ?? $product->description)) !!}
                </div>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <h3 class="mb-4">Produk Lainnya</h3>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
            @foreach($relatedProducts as $relatedProduct)
                <div class="col">
                    <div class="card h-100 shadow-sm">
                        <img src="{{ $relatedProduct->image_url ?? 'https://via.placeholder.com/350x200?text=No+Image' }}" class="card-img-top" alt="{{ $relatedProduct->name }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $relatedProduct->name }}</h5>
                            <p class="card-text text-truncate">{{ $relatedProduct->description }}</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="fw-bold text-primary">Rp {{ number_format($relatedProduct->price, 0, ',', '.') }}</span>
                                <a href="{{ route('product.show', $relatedProduct->slug) }}" class="btn btn-outline-primary btn-sm">Lihat Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach 
            @if($relatedProducts->isEmpty())
                <div class="col">
                    <div class="alert alert-info">Tidak ada produk terkait.</div>
                </div>
            @endif
        </div>
    </div>
    
</x-layout>