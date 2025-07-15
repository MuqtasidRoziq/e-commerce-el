<x-layout>
    <x-slot name="title"> Pesanan Saya</x-slot>
    <!-- Modal Form Penilaian -->
    <div class="modal fade" id="ratingModal" tabindex="-1" aria-labelledby="ratingLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form action="" method="POST">
                @csrf
                <input type="hidden" name="order_id" value="">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="ratingLabel">Beri Penilaian</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Rating Bintang -->
                        <div class="mb-3">
                            <label class="form-label">Kualitas Produk:</label>
                            <select class="form-select" name="rating" required>
                                <option class="text-center" disabled selected>-- Ratting --</option>
                                <!-- Gunakan ⭐ -->
                                @for ($i = 1; $i <= 5; $i++)
                                    <option class="text-center" value="{{ $i }}">{{ str_repeat('⭐', $i) }}</option>
                                @endfor
                            </select>
                        </div>

                        <!-- Komentar -->
                        <div class="mb-3">
                            <label for="review" class="form-label">Ulasan</label>
                            <textarea class="form-control" name="review" id="review" rows="3"
                                placeholder="Ceritakan pengalamanmu..." required></textarea>
                        </div>
                        <!-- choise foto -->
                        <div class="mb-3">
                            <label for="photo" class="form-label">Tambahkan Foto (opsional)</label>
                            <input type="file" class="form-control" name="photo" id="photo" accept="image/*">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Kirim</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="container my-4">
        @if(empty($orders))
            <p class="text-center">Anda belum memiliki pesanan.</p>
        @else
            @foreach($orders as $order)
                @foreach($order->orderDetails as $detail)
                    <div class="card mb-4 shadow-sm mt-4">
                        {{-- Header toko --}}
                        <div class="card-header bg-light py-3">
                            <div class="d-flex flex-wrap justify-content-between align-items-start gap-2">
                                <div
                                    class="d-flex flex-column flex-md-row align-items-start align-items-md-center gap-2 flex-grow-1">
                                    <strong class="text-dark">
                                        Mall | <span class="text-warning">Msthu</span> |
                                        <span class="text-primary">{{ optional($detail->product)->category->name ?? '-' }}</span>
                                    </strong>

                                    {{-- Tombol Produk Lainnya --}}
                                    <a href="/category/{{ $detail->product->category->slug}}" class="btn btn-sm btn-outline-secondary mt-2 mt-md-0">Produk Lainnya</a>
                                </div>
                                {{-- Status Pesanan --}}
                                <div class="d-flex flex-wrap align-items-center gap-3">
                                    @if($order->status === 'completed' || $order->status === 'processing')
                                        <div class="text-muted small">
                                            <strong>Resi:</strong> {{ $order->resi ?? 'Belum tersedia' }}
                                        </div>
                                    @endif

                                    @if($order->status === 'completed')
                                        <span class="badge bg-success px-3 py-2 fs-6"> Diterima</span>
                                    @elseif($order->status === 'processing')
                                        <span class="badge bg-info text-body px-3 py-2 fs-6"> Dikirim</span>
                                    @else
                                        <span class="badge bg-warning text-body px-3 py-2 fs-6"> Diproses</span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        {{-- Produk --}}
                        <div class="card-body d-flex flex-column flex-md-row align-items-md-start py-4">
                            <img src="{{ optional($detail->product)?->image_url ? Storage::url(optional($detail->product)->image_url) : 'https://via.placeholder.com/350x200?text=No+Image' }}"  alt="{{ $detail->product->name ?? 'Produk' }}"
                                class="img-thumbnail me-md-3 mb-3 mb-md-0" style="width: 120px;">
                            <div>
                                <h6>{{ optional($detail->product)->name }}</h6>
                                <p class="mb-1">Penyimpanan: {{ $detail->storage ?? '' }}</p>
                                <p class="mb-1">x{{ $detail->quantity }}</p>
                                <div class="fw-bold text-danger">Rp{{ number_format($detail->unit_price, 0, ',', '.') }}</div>
                            </div>
                        </div>

                        {{-- Footer --}}
                        <div class="card-footer bg-body-secondary">
                            <div class="d-flex flex-wrap justify-content-between align-items-center w-100 gap-2">
                                <span class="fw-bold mb-0">
                                    Total Pesanan: <span
                                        class="text-danger">Rp{{ number_format($detail->subtotal, 0, ',', '.') }}</span>
                                </span>

                                @if($order->status == 'Selesai')
                                    <div class="d-flex gap-2">
                                        <button class="btn btn-warning px-3" data-bs-toggle="modal"
                                            data-bs-target="#ratingModal">Nilai</button>
                                        <button class="btn btn-success">Beli Lagi</button>
                                    </div>
                                @endif
                            </div>
                        </div>

                    </div>
                @endforeach
            @endforeach
        @endif
    </div>


</x-layout>