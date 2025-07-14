<x-css />
<x-layout>
    <x-slot name="title"> Categories</x-slot>

    <div class="container p-5 " style="background-color:rgba(249, 249, 249, 0.79); border-radius: 12px;">
        <div class="d-flex justify-content-end align-items-center mb-4">
            <form action="{{ url('/search') }}" method="GET" class="d-flex">
                <input type="text" name="query" class="form-control me-2" placeholder="Cari produk..." value="{{ request('query') }}">
                <button type="submit" class="btn btn-primary">Search</button>
            </form>
        </div>

        @foreach ($categories as $category)
        <h4 class="mt-5 mb-3"> Brand {{-- <span class="text-secondary">{{ $category }}</span> --}}
            <span class="text-primary">{{ $category->name }}</span>
        </h4>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-5 g-4 mb-3">
            @foreach($products as $product)
            <div class="col ">
                <div class="card-body position-relative" style="min-height: 410px; width: 110%;">

                    {{-- Card Produk --}}
                    <div class="card h-100 text-center hover-shadow">

                        {{-- Gambar Produk --}}
                        <img src="{{ $product->image }}" class="card-img-top" style="height:220px;object-fit:cover;" alt="{{ $product['name'] }}">
                        <h6 class="card-title">{{ $product->name }}</h6>
                        <div class="card-body position-relative">
                            <div class="card-info">
                                <img src="{{ Storage::url($product->category->image) }}" alt="{{ $product->category->name }}" style="height: 25px;" class="ms-2 mb-3">
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

        <!-- lihat semua sesuai kategori -->
        <div class="text-center d-flex justify-content-start ms-3 mb-5">
            <a href="/category/{{ $category->slug}}" class="btn btn-outline-secondary">
                Lihat Semua Produk {{ $category->name }}
            </a>
        </div>

        <hr class="my-4 border-dark">
        @endforeach
    </div>

</x-layout>