<x-css />
<x-layout>
    <x-slot name="title"> Products</x-slot>


    <div class="container py-3">
        <h3 class="mb-4">Semua Produk</h3>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-5 g-4">

            @foreach ( $products as $product )
            <div class="col ">
                <div class="card-body position-relative" style="min-height: 410px; width: 110%;">

                    {{-- Card Produk --}}
                    <div class="card h-100 text-center hover-shadow">

                        {{-- Gambar Produk --}}
                        <img src="{{ Storage::url($product->image_url) }}" class="card-img-top" style="height:220px;object-fit:cover;" alt="{{ $product['name'] }}">
                        <h6 class="card-title">{{ $product->name }}</h6>
                        <div class="card-body position-relative">
                            <div class="card-info">
                                <!-- logo brand sesuaikan ukuran -->
                                <img src="{{ Storage::url($product->category->image) }}" alt="{{ $product->category->name }}" class="mb-2" style="width: 30px;">
                                <div class="d-flex justify-content-center ">
                                    <p class="card-text text-danger fs-5 fw-medium ">Rp{{ number_format($product->price, 0, ',', '.') }}</p>
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
                                <a href="/product/{{ $product->slug }}" class="btn btn-primary btn-sm">Lihat Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>



</x-layout>