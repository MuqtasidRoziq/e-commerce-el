<x-css />
<x-layout>
    <x-slot name="title"> {{$product->name}}</x-slot>
    <!-- Modal: Peringatan Pilih Warna -->
    <div class="modal fade" id="chooseColorModal" tabindex="-1" aria-labelledby="chooseColorModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content ">
                <div class="modal-header  bg-opacity-75">
                    <h5 class="modal-title text-dark" id="chooseColorModalLabel">⚠️ Oops! Kamu belum memilih warna produk</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                </div>
                <div class="modal-body fs-6 text-dark text-center fw-semibold">
                    Pilih warna terlebih dahulu untuk menampilkan opsi penyimpanan.
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="chooseStorageModal" tabindex="-1" aria-labelledby="chooseColorModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content ">
                <div class="modal-header  bg-opacity-75">
                    <h5 class="modal-title text-dark" id="chooseColorModalLabel">⚠️ Harap memilih Penyimpanan produk</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                </div>
                <div class="modal-body fs-6 text-dark text-center fw-semibold">
                  Silakan pilih opsi penyimpanan terlebih dahulu sebelum melanjutkan transaksi.
                </div>
            </div>
        </div>
    </div>

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
                    <a href="{{ route('checkout.index') }}" id="buyNowBtn" class="btn btn-success w-100">
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

                    <li class="list-group-item">
                        <div class="mb-2">
                            <strong>Warna:</strong>
                            <span id="selected-color" class="ms-2">-</span>
                        </div>
                        <div class="d-flex gap-4 flex-wrap mt-2">
                            @foreach (['gray' => '#7a7a7a', 'black' => '#000000', 'icyblue' => '#c5dbe8'] as $name => $color)
                            <div class="color-circle"
                                style="background-color: {{ $color }};"
                                data-color-name="{{ ucfirst($name) }}"
                                title="{{ ucfirst($name) }}">
                            </div>
                            @endforeach
                        </div>
                    </li>

                    <li class="list-group-item ">
                        <span><strong>Penyimpanan:</strong></span>
                        <div class="d-flex gap-3 mb-3">
                            @foreach(['256 GB', '512 GB'] as $size)
                            <button class="btn btn-outline-dark btn-sm storage-btn p-2 mt-2">{{ $size }}</button>
                            @endforeach
                        </div>
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

        <div class="row mb-5 p-3 p-md-5">
            <div class="col-12 col-md-4 text-center">
                <img src="https://th.bing.com/th/id/OIP.6rEmHDf3ORQc44w62pVjNwHaHa?w=158&h=180&c=7&r=0&o=7&dpr=1.3&pid=1.7&rm=3"
                    class="img-fluid rounded mb-3" alt="iPhone 13" style="max-width: 200px;">
            </div>

            <div class="col-12 col-md-8">
                <h4>Ulasan Pelanggan <span class="text-warning">124</span> ulasan</h4>
                <div class="display-4 fw-bold text-orange">5.0</div>
                <div class="mb-2">
                    ⭐⭐⭐⭐⭐ <small class="text-muted">5.0 dari 5 bintang</small>
                </div>

                <!-- Bar rating -->
                <div>
                    @for($i = 5; $i >= 1; $i--)
                    <div class="d-flex align-items-center mb-1">
                        <div class="me-1" style="width: 24px">{{ $i }}</div>
                        <div class="progress flex-grow-1" style="height: 10px;">
                            <div class="progress-bar bg-orange" style="width:{{ $i == 3 ? '100%' : '0%' }}"></div>
                        </div>
                        <div class="ms-2 small">{{ $i == 3 ? 104 : 0 }}</div>
                    </div>
                    @endfor
                </div>
            </div>
        </div>

    </div>
    <!-- ==================================================================================================================================================================================== -->
    <div class="container my-5">
        <h3 class="mb-4">Produk Lainnya</h3>
        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 g-4">
            @foreach($relatedProducts as $relatedProduct)
            <div class="col">

                <div class="card h-100 text-center hover-shadow related-card">
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


            <!-- ============================================ -->




            @endforeach
            @if($relatedProducts->isEmpty())
            <div class="col">
                <div class="alert alert-info">Tidak ada produk terkait.</div>
            </div>
            @endif
        </div>
    </div>


</x-layout>
<style>
    
    .related-card {
        position: relative;
        transition: all 0.3s ease;
    }

    /* Khusus untuk ukuran besar */
    @media (min-width: 768px) {
        .related-card {
            min-height: 480px;
        }
    }

    .color-circle {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        border: 2px solid transparent;
        cursor: pointer;
        position: relative;
    }

    .color-circle.selected {
        border: 2px solid #000;
    }

    .color-circle.selected::after {
        content: '✔';
        position: absolute;
        bottom: -5px;
        right: -5px;
        background-color: white;
        border-radius: 50%;
        font-size: 10px;
        padding: 1px 4px;
    }

    .storage-btn.active {
        border-color: #000;
        background-color: #000;
        color: white;
    }
    .modal-header {
        background-color: #fff3cd;
        color: #856404;
    }
</style>
<script>

    let selectedColor = null;
    // Pilih warna
    document.querySelectorAll('.color-circle').forEach(circle => {
        circle.addEventListener('click', function() {
            // Reset semua
            document.querySelectorAll('.color-circle').forEach(c => c.classList.remove('selected'));
            this.classList.add('selected');

            // Set warna
            selectedColor = this.getAttribute('data-color-name');
            document.getElementById('selected-color').textContent = selectedColor;
        });
    });

    // Validasi penyimpanan
    document.querySelectorAll('.storage-btn').forEach(btn => {
        btn.addEventListener('click', function(e) {
            if (!selectedColor) {
                e.preventDefault();
                const modal = new bootstrap.Modal(document.getElementById('chooseColorModal'));
                modal.show();
                return;
            }

            // Hapus dan tambahkan active
            document.querySelectorAll('.storage-btn').forEach(b => b.classList.remove('active'));
            this.classList.add('active');
        });
    });

    let selectedStorage = null;
    document.querySelectorAll('.storage-btn').forEach(btn => {
        btn.addEventListener('click', function(e) {
            if (!selectedColor) {
                e.preventDefault();
                const modal = new bootstrap.Modal(document.getElementById('chooseColorModal'));
                modal.show();
                return;
            }

            // Hapus dan tambahkan active
            document.querySelectorAll('.storage-btn').forEach(b => b.classList.remove('active'));
            this.classList.add('active');

            // Set penyimpanan yang dipilih
            selectedStorage = this.textContent.trim();
        });
    });
    // jika ingin beli sekarang harus sudah memilih storage
    document.getElementById('buyNowBtn').addEventListener('click', function(e) {
        if (!selectedColor || !selectedStorage) {
            e.preventDefault();
            const modal = new bootstrap.Modal(document.getElementById('chooseStorageModal'));
            modal.show();
        }
    });
</script>