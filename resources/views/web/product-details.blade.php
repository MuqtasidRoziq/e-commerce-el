<x-css />
<x-layout>
    <x-slot name="title"> {{$product->name}}</x-slot>

    <div class="modal fade" id="chooseStorageModal" tabindex="-1" aria-labelledby="chooseColorModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content ">
                <div class="modal-header  bg-opacity-75">
                    <h5 class="modal-title text-dark" id="chooseColorModalLabel">⚠️ Harap memilih Penyimpanan produk
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                </div>
                <div class="modal-body fs-6 text-dark text-center fw-semibold">
                    Silakan pilih opsi penyimpanan terlebih dahulu sebelum melanjutkan transaksi.
                </div>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row g-5 align-items-start">
            <div class="col-md-6">
                <div class="bg-white rounded p-3 shadow-lg">
                    <img src="{{ $product->image_url ?? 'https://via.placeholder.com/500x500' }}"
                        class="img-fluid rounded w-100" alt="{{ $product->name }}">
                </div>
                <div class="mt-4">
                    <span class="badge bg-secondary">{{ $product->category->name ?? 'Kategori Tidak Diketahui' }}</span>
                </div>
            </div>
            <div class="col-md-6">
                <h1 class="mb-2 fw-bold">{{ $product->name }}</h1>
                <div class="mb-3">
                    <span
                        class="fs-4 text-success fw-semibold">Rp.{{ number_format($product->price, 0, ',', '.') }}</span>
                    @if($product->old_price)
                        <span
                            class="text-muted text-decoration-line-through ms-2">Rp{{ number_format($product->old_price, 0, ',', '.') }}</span>
                    @endif
                </div>
                <div class="mb-4">
                    <p class="text-muted">{{ $product->description }}</p>
                </div>

                <form action="{{ route('cart.add') }}" method="POST" class="mb-4"  id="addToCartForm">
                    @csrf
                    <div class="mb-4">
                        <span>Stok:</span>
                        <span class="{{ $product->stock > 0 ? 'text-muted' : 'text-danger' }}">
                            {{ $product->stock > 0 ? $product->stock : 'Habis' }}
                        </span>
                    </div>
                    <div>
                        <span><strong>Penyimpanan:</strong></span>
                        <div class="d-flex gap-3 mb-3">
                            @foreach(['128 GB', '256 GB', '512 GB'] as $storage)
                                <button type="button" class="btn btn-outline-dark btn-sm storage-btn p-2 mt-2">{{ $storage }}</button>
                            @endforeach
                            <input type="hidden" name="storage" id="storageSizeInput" value="">
                        </div>
                    </div>
                    {{-- Baris: Input + Tambah ke Keranjang --}}
                    <div class="d-flex gap-2 mb-2" style="max-width:70%;">
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                
                        <button type="button" class="btn btn-outline-secondary btn-sm" onclick="changeQuantity(-1)"
                            id="decreaseBtn">-</button>
                
                        <input type="text" id="quantityInput" name="quantity" value="1" value="1" min="1" max="{{ $product->stock }}"
                            class="form-control form-control-sm text-center mx-1" style="width: 50px;">
                
                        <button type="button" class="btn btn-outline-secondary btn-sm" onclick="changeQuantity(1)">+</button>
                
                        {{-- Tombol keranjang dengan lebar sesuai teks --}}
                        <button class="btn btn-primary" type="submit" name="action" value="add" style="white-space: nowrap;">
                            <i class="bi bi-cart-plus me-1"><img src="{{ asset('static/cart.png') }}" alt="image cart"
                                    style="width: 30px;"></i>
                        </button>
                    </div>
                </form>
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
                        <img src="{{ $relatedProduct->image_url ?? 'https://via.placeholder.com/350x200?text=No+Image' }}"
                            class="card-img-top" alt="{{ $relatedProduct->name }}">
                        <h5 class="card-title mt-3">{{ $relatedProduct->name }}</h5>
                        <div class="card-body position-relative">

                            <div class="d-flex justify-content-center ">
                                <span class="fw-bold text-primary">Rp
                                    {{ number_format($relatedProduct->price, 0, ',', '.') }}</span>
                            </div>

                            <div class="card-action">
                                <a href="{{ route('product.show', $relatedProduct->slug) }}"
                                    class="btn btn-outline-primary btn-sm">Lihat Detail</a>
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
    document.addEventListener('DOMContentLoaded', () => {
        // Global untuk validasi storage
        window.selectedStorage = null;

        // Tombol storage
        document.querySelectorAll('.storage-btn').forEach(btn => {
            btn.addEventListener('click', function () {
                document.querySelectorAll('.storage-btn').forEach(b => b.classList.remove('active'));
                this.classList.add('active');

                window.selectedStorage = this.textContent.trim();
                document.getElementById('storageSizeInput').value = window.selectedStorage;
            });
        });

        // Validasi submit form
        const addToCartForm = document.getElementById('addToCartForm');
        if (addToCartForm) {
            addToCartForm.addEventListener('submit', function (e) {
                if (!window.selectedStorage) {
                    e.preventDefault();
                    const modal = new bootstrap.Modal(document.getElementById('chooseStorageModal'));
                    modal.show();
                }
            });
        }

        // Quantity logic
        const maxStock = {{ $product->stock }};
        const quantityInput = document.getElementById('quantityInput');
        const decreaseBtn = document.getElementById('decreaseBtn');

        function changeQuantity(change) {
            let currentVal = parseInt(quantityInput.value);
            if (isNaN(currentVal)) currentVal = 1;

            let newVal = currentVal + change;
            if (newVal < 1) newVal = 1;
            if (newVal > maxStock) newVal = maxStock;

            quantityInput.value = newVal;
            decreaseBtn.disabled = (newVal <= 1);
        }

        window.changeQuantity = changeQuantity;
        decreaseBtn.disabled = parseInt(quantityInput.value) <= 1;
    });
</script>