<!-- category produk menggunakan data dummy -->
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

    <x-slot name="title"> Homepage</x-slot>

    <!-- banner -->
    <!-- Section Judul -->
    <div class="container py-4">
        <h2 class="text-center fw-bold mb-4">Promo Terbaru</h2>
    </div>

    <!-- Carousel -->
    <div id="promo-carousel" class="carousel slide mb-5 bg-danger py-5" data-bs-ride="carousel" data-bs-interval="3000">
        <div class="carousel-inner text-center">
            @php $first = true; @endphp
            @foreach ($dummyProducts as $product)
            <div class="carousel-item {{ $first ? 'active' : '' }}">
                @php $first = false; @endphp

                <div class="d-flex justify-content-center">
                    <div class="card bg-dark text-white shadow" style="width: 18rem; height: 30rem;">
                        <img src="{{ $product['image'] }}" class="card-img-top"
                            style="height: 330px; object-fit: cover;" alt="{{ $product['name'] }}">

                        <div class="card-body">
                            <h5 class="card-title">{{ $product['name'] }}</h5>
                            <span class="badge bg-primary mb-2">{{ $product['category'] }}</span>
                            <p class="card-text mb-2">Rp{{ number_format($product['price'], 0, ',', '.') }}</p>
                            <a href="/product/{{ $product['id'] ?? 1 }}" class="btn btn-outline-light btn-sm">Lihat Detail</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Navigasi -->
        <button class="carousel-control-prev" type="button" data-bs-target="#promo-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Sebelumnya</span>
        </button>

        <button class="carousel-control-next" type="button" data-bs-target="#promo-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Selanjutnya</span>
        </button>
    </div>

    <!-- kategori -->

    <div class="scroll-wrapper">
        <div class="category-scroll d-flex flex-row gap-4 py-4 ">

            @for ($i = 0; $i < 100; $i++)
                @foreach ($categories as $category)
                <div class="card text-center flex-shrink-0 hover-shadow" style="width: 15rem; height: 13rem;">
                <div class="card-body ">
                    <h5 class="card-title mb-2">{{ $category }}</h5>
                    @if(isset($brandLogos[$category]))
                    <img src="{{ $brandLogos[$category] }}" alt="{{ $category }} Logo"
                        style="height: 40px; object-fit: contain;" class="my-2">
                    @endif
                    <p class="card-text small mb-0">Temukan produk terbaru dari {{ $category }} di sini.</p>
                </div>
        </div>
        @endforeach
        @endfor
    </div>


    <!--  -->
    <div class="container py-3 mt-5">

        <div class="d-flex justify-content-between align-items-center mb-4">
            <h3 style="font-size: 1.5rem;">Product Kami</h3>

        </div>

        @php
        $products = array_slice($dummyProducts, 0, 10);
        @endphp

        <div class="container py-3">

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-5 g-4">
                @foreach ($products as $product)
                 <div class="col ">
                <div class="card-body position-relative" style="min-height: 410px; width: 110%;">

                    {{-- Card Produk --}}
                    <div class="card h-100 text-center hover-shadow">

                        {{-- Gambar Produk --}}
                        <img src="{{ $product['image'] }}" class="card-img-top" style="height:220px;object-fit:cover;" alt="{{ $product['name'] }}">
                        <h6 class="card-title">{{ $product['name'] }}</h6>
                        <div class="card-body position-relative">
                            <div class="card-info">
                                <!-- logo brand sesuaikan ukuran -->
                                <img src="{{ $brandLogos[$product['category']] }}" alt="{{ $product['category'] }}" class="mb-2" style="width: 30px; height: 35px;">
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
                                <a href="/product" class="btn btn-primary btn-sm">Lihat Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                @endforeach
            </div>
            <div class=" d-flex text-center my-5">
                <a href="/allproduct" class="btn btn-outline-primary ">Lihat Semua Produk</a>
            </div>
            <hr class="border-top border-black opacity-25 my-3" />

            <!-- Navigasi Prev/Next -->
            <div class="d-flex justify-content-center mt-4 gap-3">
                <button class="btn btn-outline-dark" id="prevBtn">Previous</button>
                <button class="btn btn-outline-dark" id="nextBtn">Next</button>
            </div>
        </div>

    </div>

</x-layout>

<style>


</style>