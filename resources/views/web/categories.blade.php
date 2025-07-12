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
$Products = [
// APPLE
['name' => 'iPhone 13', 'price' => 13999000, 'image' => 'https://www.apple.com/v/iphone/home/cb/images/overview/select/iphone_16pro__erw9alves2qa_xlarge_2x.png', 'category' => 'APPLE', 'stock' => 10, 'rating' => 4.5, 'discount' => 10, 'terjual' => 100],
['name' => 'iPhone 14 Pro', 'price' => 19999000, 'image' => 'https://www.apple.com/v/iphone/home/cb/images/overview/select/iphone_16pro__erw9alves2qa_xlarge_2x.png', 'category' => 'APPLE', 'stock' => 5, 'rating' => 4.8, 'discount' => 15, 'terjual' => 50],
['name' => 'iPhone 15', 'price' => 15999000, 'image' => 'https://www.apple.com/v/iphone/home/cb/images/overview/select/iphone_16__erw9alves2qa_xlarge_2x.png', 'category' => 'APPLE', 'stock' => 7, 'rating' => 4.6, 'discount' => 5, 'terjual' => 75],
['name' => 'iPhone SE (2022)', 'price' => 8999000, 'image' => 'https://www.apple.com/v/iphone/home/cb/images/overview/select/iphone_se__erw9alves2qa_xlarge_2x.png', 'category' => 'APPLE', 'stock' => 12, 'rating' => 4.2, 'discount' => 0, 'terjual' => 200],
['name' => 'iPhone 14', 'price' => 17999000, 'image' => 'https://www.apple.com/v/iphone/home/cb/images/overview/select/iphone_16__erw9alves2qa_xlarge_2x.png', 'category' => 'APPLE', 'stock' => 8, 'rating' => 4.7, 'discount' => 10, 'terjual' => 80],
['name' => 'iPhone 15 Pro Max', 'price' => 24999000, 'image' => 'https://www.apple.com/v/iphone/home/cb/images/overview/select/iphone_16pro_max__erw9alves2qa_xlarge_2x.png', 'category' => 'APPLE', 'stock' => 3, 'rating' => 4.9, 'discount' => 20, 'terjual' => 30],

// SAMSUNG
['name' => 'Samsung Galaxy S23 Ultra', 'price' => 19999000, 'image' => 'https://fdn2.gsmarena.com/vv/pics/samsung/samsung-galaxy-s23-ultra-1.jpg', 'category' => 'SAMSUNG', 'stock' => 5, 'rating' => 4.7, 'discount' => 15, 'terjual' => 60],
['name' => 'Samsung Galaxy A54', 'price' => 5999000, 'image' => 'https://fdn2.gsmarena.com/vv/pics/samsung/samsung-galaxy-a54-1.jpg', 'category' => 'SAMSUNG', 'stock' => 10, 'rating' => 4.3, 'discount' => 10, 'terjual' => 120],
['name' => 'Samsung Galaxy Z Flip5', 'price' => 14999000, 'image' => 'https://fdn2.gsmarena.com/vv/pics/samsung/samsung-galaxy-z-flip5-1.jpg', 'category' => 'SAMSUNG', 'stock' => 4, 'rating' => 4.6, 'discount' => 20, 'terjual' => 40],
['name' => 'Samsung Galaxy M34', 'price' => 3999000, 'image' => 'https://fdn2.gsmarena.com/vv/pics/samsung/samsung-galaxy-m34-1.jpg', 'category' => 'SAMSUNG', 'stock' => 8, 'rating' => 4.1, 'discount' => 5, 'terjual' => 90],
['name' => 'Samsung Galaxy S23+', 'price' => 17999000, 'image' => 'https://fdn2.gsmarena.com/vv/pics/samsung/samsung-galaxy-s23-plus-1.jpg', 'category' => 'SAMSUNG', 'stock' => 6, 'rating' => 4.8, 'discount' => 10, 'terjual' => 70],
['name' => 'Samsung Galaxy A14', 'price' => 2999000, 'image' => 'https://fdn2.gsmarena.com/vv/pics/samsung/samsung-galaxy-a14-1.jpg', 'category' => 'SAMSUNG', 'stock' => 9, 'rating' => 4.0, 'discount' => 0, 'terjual' => 150],

// VIVO
['name' => 'Vivo X90 Pro', 'price' => 10999000, 'image' => 'https://fdn2.gsmarena.com/vv/pics/vivo/vivo-x90-pro-1.jpg', 'category' => 'VIVO', 'stock' => 4, 'rating' => 4.5, 'discount' => 10, 'terjual' => 30],
['name' => 'Vivo V27 Pro', 'price' => 5999000, 'image' => 'https://fdn2.gsmarena.com/vv/pics/vivo/vivo-v27-pro-1.jpg', 'category' => 'VIVO', 'stock' => 8, 'rating' => 4.3, 'discount' => 5, 'terjual' => 80],
['name' => 'Vivo Y100', 'price' => 3499000, 'image' => 'https://fdn2.gsmarena.com/vv/pics/vivo/vivo-y100-1.jpg', 'category' => 'VIVO', 'stock' => 10, 'rating' => 4.1, 'discount' => 0, 'terjual' => 100],
['name' => 'Vivo S16 Pro', 'price' => 15999000, 'image' => 'https://fdn2.gsmarena.com/vv/pics/vivo/vivo-s16-pro-1.jpg', 'category' => 'VIVO', 'stock' => 5, 'rating' => 4.8, 'discount' => 15, 'terjual' => 20],
['name' => 'Vivo Y35', 'price' => 2999000, 'image' => 'https://fdn2.gsmarena.com/vv/pics/vivo/vivo-y35-1.jpg', 'category' => 'VIVO', 'stock' => 6, 'rating' => 4.0, 'discount' => 0, 'terjual' => 150],
['name' => 'Vivo T2 Pro', 'price' => 3499000, 'image' => 'https://fdn2.gsmarena.com/vv/pics/vivo/vivo-t2-pro-1.jpg', 'category' => 'VIVO', 'stock' => 7, 'rating' => 4.2, 'discount' => 5, 'terjual' => 60],

// XIAOMI
['name' => 'Xiaomi 15 Ultra', 'price' => 11999000, 'image' => 'https://th.bing.com/th/id/OIP.-IT2_zdKIZ3hHh0853WVvAHaHa?pid=ImgDet&w=185&h=185&c=7&dpr=1,3', 'category' => 'XIAOMI', 'stock' => 3, 'rating' => 4.6, 'discount' => 10, 'terjual' => 25],
['name' => 'Xiaomi Redmi Note 12 Pro', 'price' => 4999000, 'image' => 'https://th.bing.com/th/id/OIP.-IT2_zdKIZ3hHh0853WVvAHaHa?pid=ImgDet&w=185&h=185&c=7&dpr=1,3', 'category' => 'XIAOMI', 'stock' => 6, 'rating' => 4.4, 'discount' => 5, 'terjual' => 90],
['name' => 'Xiaomi Poco F5', 'price' => 3999000, 'image' => 'https://th.bing.com/th/id/OIP.-IT2_zdKIZ3hHh0853WVvAHaHa?pid=ImgDet&w=185&h=185&c=7&dpr=1,3', 'category' => 'XIAOMI', 'stock' => 8, 'rating' => 4.2, 'discount' => 0, 'terjual' => 120],
['name' => 'Xiaomi Mi A3', 'price' => 2999000, 'image' => 'https://th.bing.com/th/id/OIP.-IT2_zdKIZ3hHh0853WVvAHaHa?pid=ImgDet&w=185&h=185&c=7&dpr=1,3', 'category' => 'XIAOMI', 'stock' => 10, 'rating' => 4.0, 'discount' => 0, 'terjual' => 200],
['name' => 'Xiaomi Redmi K60 Pro', 'price' => 15999000, 'image' => 'https://th.bing.com/th/id/OIP.-IT2_zdKIZ3hHh0853WVvAHaHa?pid=ImgDet&w=185&h=185&c=7&dpr=1,3', 'category' => 'XIAOMI', 'stock' => 5, 'rating' => 4.8, 'discount' => 15, 'terjual' => 30],
['name' => 'Xiaomi Poco X5 Pro', 'price' => 3499000, 'image' => 'https://th.bing.com/th/id/OIP.-IT2_zdKIZ3hHh0853WVvAHaHa?pid=ImgDet&w=185&h=185&c=7&dpr=1,3', 'category' => 'XIAOMI', 'stock' => 7, 'rating' => 4.3, 'discount' => 5, 'terjual' => 60],

// REALME iniii
['name' => 'Realme GT7 Pro', 'price' => 10999000, 'image' => 'https://image01.realme.net/general/20250522/17478892761986a7207924f9449b59872dd5a19aed71c.png.webp?width=080&height=1080&size=866353', 'category' => 'REALME', 'stock' => 4, 'rating' => 4.5, 'discount' => 10, 'terjual' => 30],
['name' => 'Realme 11 Pro+', 'price' => 5999000, 'image' => 'https://image01.realme.net/general/20250522/17478892761986a7207924f9449b59872dd5a1aed71c.png.webp?width=180&height=1080&size=866353', 'category' => 'REALME', 'stock' => 8, 'rating' => 4.3, 'discount' => 5, 'terjual' => 80],
['name' => 'Realme Narzo 60 Pro', 'price' => 3499000, 'image' => 'https://image01.realme.net/general/20250522/17478892761986a7207924f9449b59872dd5a9aed71c.png.webp?width=1080&height=108&size=866353', 'category' => 'REALME', 'stock' => 10, 'rating' => 4.1, 'discount' => 0, 'terjual' => 100],
['name' => 'Realme C55', 'price' => 2999000, 'image' => 'https://image01.realme.net/general/20250522/17478892761986a7207924f9449b59872dd5a19aed71c.png.wbp?width=1080&height=1080&size=86653', 'category' => 'REALME', 'stock' => 6, 'rating' => 4.2, 'discount' => 5, 'terjual' => 60],
['name' => 'Realme GT Neo5', 'price' => 15999000, 'image' => 'https://image01.realme.net/general/20250522/17478892761986a7207924f9449b59872dd5a19aed71c.pg.webp?width=1080&height=1080&size=866353', 'category' => 'REALME', 'stock' => 3, 'rating' => 4.6, 'discount' => 10, 'terjual' => 25],
['name' => 'Realme Narzo N55', 'price' => 3999000, 'image' => 'https://image01.realme.net/general/20250522/17478892761986a727924f9449b59872dd5a19aed71c.png.webp?idth=1080&height=1080&size=866353', 'category' => 'REALME', 'stock' => 7, 'rating' => 4.4, 'discount' => 5, 'terjual' => 90],

];
@endphp

<x-css />
<x-layout>
    <x-slot name="title"> Categories</x-slot>

    @php
    $grouped = collect($Products)->groupBy('category');
    @endphp

    <div class="container p-5 " style="background-color:rgba(249, 249, 249, 0.79); border-radius: 12px;">
        <div class="d-flex justify-content-end align-items-center mb-4">
            <form action="{{ url('/search') }}" method="GET" class="d-flex">
                <input type="text" name="query" class="form-control me-2" placeholder="Cari produk..." value="{{ request('query') }}">
                <button type="submit" class="btn btn-primary">Search</button>
            </form>
        </div>

        @foreach ($grouped as $category => $items)
        <h4 class="mt-5 mb-3"> Brand {{-- <span class="text-secondary">{{ $category }}</span> --}}
            <span class="text-primary">{{ ucfirst(strtolower($category)) }}</span>
        </h4>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-5 g-4 mb-3">
            @foreach($items->take(5) as $product)
            <div class="col ">
                <div class="card-body position-relative" style="min-height: 410px; width: 110%;">

                    {{-- Card Produk --}}
                    <div class="card h-100 text-center hover-shadow">

                        {{-- Gambar Produk --}}
                        <img src="{{ $product['image'] }}" class="card-img-top" style="height:220px;object-fit:cover;" alt="{{ $product['name'] }}">
                        <h6 class="card-title">{{ $product['name'] }}</h6>
                        <div class="card-body position-relative">
                            <div class="card-info">
                                <img src="{{ $brandLogos[$category] }}" alt="{{ $category }}" style="height: 25px;" class="ms-2 mb-3">
                                <div class="d-flex justify-content-center ">
                                    <p class="card-text text-danger fs-5 fw-medium ">Rp{{ number_format($product['price'], 0, ',', '.') }}</p>
                                    @if ($product['discount'] > 0)
                                    <p class="card-text text-success fs-6 fw-medium ms-3">{{ $product['discount'] }}%</p>
                                    @endif
                                </div>

                                <div class="d-flex d-flex justify-content-around fw-semibold mt-4 pb-2">
                                    {{-- Stok --}}
                                    {{-- Rating --}}
                                    <div class="mb-1 text-warning">
                                        ★<small class="text-muted">({{ $product['rating'] }})</small>
                                    </div>
                                    {{-- terjual --}}
                                    <div class="mb-1 text-muted">
                                        {{ $product['terjual'] }} Terjual
                                    </div>

                                </div>

                            </div>
                            <div class="card-action">
                                <a href="/produkdetail" class="btn btn-primary btn-sm">Lihat Detail</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            @endforeach
        </div>

        <!-- lihat semua sesuai kategori -->
        <div class="text-center d-flex justify-content-start ms-3 mb-5">
            <a href="/product?brand={{ strtolower($category) }}" class="btn btn-outline-secondary">
                Lihat Semua Produk {{ $category }}
            </a>
        </div>

        <hr class="my-4 border-dark">
        @endforeach
    </div>

</x-layout>