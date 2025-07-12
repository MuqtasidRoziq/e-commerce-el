

<x-css />
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
                <div class="bg-white rounded p-3 shadow-lg">
                    <img src="{{ $product->image_url ?? 'https://via.placeholder.com/500x500' }}" class="img-fluid rounded w-100" alt="{{ $product->name }}">
                </div>
                <div class="mt-4">
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

                    {{-- Baris: Input + Tambah ke Keranjang --}}
                    <div class="d-flex gap-2 mb-2" style="max-width:70%;">
                        <input type="hidden" name="product_id" value="{{ $product->id }}">

                        {{-- Input quantity yang bisa melar --}}
                        <input type="number" name="quantity" class="form-control flex-grow-1" value="1" min="1" max="{{ $product->stock }}">

                        {{-- Tombol keranjang dengan lebar sesuai teks --}}
                        <button class="btn btn-primary" type="submit" name="action" value="add" style="white-space: nowrap;">
                            <i class="bi bi-cart-plus me-1"></i> Tambahkan ke Keranjang
                        </button>
                    </div>

                    {{-- Baris: Beli Sekarang --}}
                    @if($product->stock > 0)
                    <a href="{{ route('checkout.index') }}" class="btn btn-success w-100">
                        <i class="bi bi-cash me-1"></i> Beli Sekarang
                    </a>
                    @else
                    <button class="btn btn-secondary w-100" type="button" disabled>
                        <i class="bi bi-cart-dash me-1"></i> Habis
                    </button>
                    @endif
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
                <div class="card-body position-relative" style="min-height: 490px; width: 100%;">
                <div class="card h-100 text-center hover-shadow">
                    <img src="{{ $relatedProduct->image_url ?? 'https://via.placeholder.com/350x200?text=No+Image' }}" class="card-img-top" alt="{{ $relatedProduct->name }}">
                    <h5 class="card-title mt-3">{{ $relatedProduct->name }}</h5>
                    <div class="card-body position-relative">  
                         
                        <div class="d-flex justify-content-center ">
                            <span class="fw-bold text-primary">Rp {{ number_format($relatedProduct->price, 0, ',', '.') }}</span>
                        </div>

                        <div class="card-action">
                            <a href="{{ route('product.show', $relatedProduct->slug) }}" class="btn btn-outline-primary btn-sm">Lihat Detail</a>
                        </div>
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