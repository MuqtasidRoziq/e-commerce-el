<x-css />
<x-layout>

    <x-slot name="title"> Homepage</x-slot>


    <!-- Carousel -->
    <div id="promo-carousel" class="carousel slide mb-5 py-5" data-bs-ride="carousel" data-bs-interval="3000">
        <div class="carousel-inner text-center">
            @php $first = true; @endphp
            @foreach ($products as $product)
                <div class="carousel-item {{ $first ? 'active' : '' }}">
                    @php $first = false; @endphp

                    <div class="d-flex justify-content-center">
                        <div class="card bg-dark text-white shadow" style="width: 18rem; height: 30rem;">
                            <img src="{{ $product->image}}" class="card-img-top"
                                style="height: 330px; object-fit: cover;" alt="{{ $product->name }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $product->name }}</h5>
                                <span class="badge bg-primary mb-2">{{ $product->category->name }}</span>
                                <p class="card-text mb-2">Rp{{ number_format($product->price, 0, ',', '.') }}</p>
                                <a href="/product/{{ $product->slug}}" class="btn btn-outline-light btn-sm">Lihat
                                    Detail</a>
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
        <!-- Baris Pertama: card dari perulangan 100x -->
        <div class="category-scroll d-flex flex-row gap-4 py-3">
            @for ($i = 0; $i < 100; $i++)
                @foreach ($categories as $category)
                    <div class="card text-center flex-shrink-0 hover-shadow" style="width: 15rem; height: 13rem;">
                        <div class="card-body">
                            @if(isset($category->image))
                                <img src="{{ Storage::url($category->image) }}" alt="{{ $category }} Logo"
                                    style="height: 40px; object-fit: contain;" class="my-5">
                            @endif
                            <p class="card-text small mb-0">Temukan produk terbaru dari {{ $category->name }} di sini.</p>
                        </div>
                    </div>
                @endforeach
            @endfor
        </div>

        <!-- Baris Kedua: Perulangan 50x, mulai dari index ke-3 -->
        <div class="category-scroll1 d-flex flex-row gap-4 ">
            @for ($i = 0; $i < 100; $i++)
                @foreach ($categories as $category)
                    @php
                        $promos = [
                            "Eksplor koleksi terbaru dari $category->name hanya di sini!",
                            "Ngaku fans $category->name ? Lihat yang terbaru yuk!",
                            "Produk $category->name terkini yang wajib kamu lihat.",
                            "Bikin harimu makin lengkap bareng $category->name.",
                            "Baru datang! $category->name siap bikin kamu tampil beda."
                        ];
                    @endphp
                    <div class="card text-center flex-shrink-0 hover-shadow" style="width: 15rem; height: 13rem;">
                        <div class="card-body">

                            @if(isset($category->image))
                                <img src="{{ Storage::url($category->image) }}" alt="{{ $category }} Logo"
                                    style="height: 40px; object-fit: contain;" class="my-5">
                            @endif
                            <p class="card-text fw-semibold small text-dark mb-0">
                                {{ $promos[array_rand($promos)] }}
                            </p>
                        </div>
                    </div>
                @endforeach
            @endfor
        </div>
    </div>

    <!--  -->
    <div class="container py-3 mt-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h3 style="font-size: 1.5rem;">Product Kami</h3>
        </div>

        <div class="container py-3">

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-5 g-4">
                <!-- tampilkan hanya 10 produk -->
                @foreach ($products->take(10) as $product)
                    <div class="col ">
                        <div class="card-body position-relative" style="min-height: 410px; width: 110%;">
                            {{-- Card Produk --}}
                            <div class="card h-100 text-center hover-shadow">
                                {{-- Gambar Produk --}}
                                <img src="{{ $product->image }}" class="card-img-top"
                                    style="height:220px;object-fit:cover;" alt="{{ $product['name'] }}">
                                <h6 class="card-title">{{ $product->name }}</h6>
                                <div class="card-body position-relative">
                                    <div class="card-info">
                                        <!-- logo brand sesuaikan ukuran -->
                                        <img src="{{ Storage::url($product->category->image) }}" alt="{{ $category->name }}"
                                            class="mb-2" style="width: 30px;">
                                        <div class="d-flex justify-content-center ">
                                            <p class="card-text text-danger fs-5 fw-medium ">
                                                Rp{{ number_format($product->price, 0, ',', '.') }}</p>
                                        </div>

                                        <div class="d-flex d-flex justify-content-around fw-semibold mt-4 pb-2">
                                            {{-- Stok --}}
                                            {{-- Rating --}}
                                            <div class="mb-1 text-warning">
                                                ★<small class="text-muted">({{ $product['rating'] }})</small>
                                            </div>
                                            {{-- terjual --}}
                                            <div class="mb-1 text-muted">
                                                {{ $product->terjual ?? 0 }} Terjual
                                            </div>
                                        </div>

                                    </div>

                                    <div class="card-action">
                                        <a href="/product/{{ $product->slug }}" class="btn btn-outline-primary ">Lihat Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class=" d-flex text-center my-5">
                <a href="/products" class="btn btn-outline-primary ">Lihat Semua Produk</a>
            </div>
        </div>
    </div>

</x-layout>
