<x-layout>
    <x-slot name="title">Checkout</x-slot>

    <div class="container my-5">
        <div class="row">
            <!-- Detail Penagihan -->
            <div class="col-md-7">
                <h4 class="mb-4">Detail Penagihan</h4>
                <div class="mb-3">
                    <label for="fullname" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" id="fullname" placeholder="Masukkan nama lengkap Anda">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Alamat Email</label>
                    <input type="email" class="form-control" id="email" placeholder="anda@contoh.com">
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="address" placeholder="Jl. Contoh 1234">
                </div>
                <div class="mb-3">
                    <label for="city" class="form-label">Kota</label>
                    <input type="text" class="form-control" id="city" placeholder="Kota">
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="state" class="form-label">Provinsi</label>
                        <input type="text" class="form-control" id="state" placeholder="Provinsi">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="zip" class="form-label">Kode Pos</label>
                        <input type="text" class="form-control" id="zip" placeholder="Kode Pos">
                    </div>
                </div>
                <hr class="my-4">
                <h5 class="mb-3">Pembayaran</h5>
                <div class="mb-3">
                    <label for="cardName" class="form-label">Nama di Kartu</label>
                    <input type="text" class="form-control" id="cardName" placeholder="Nama sesuai kartu">
                </div>
                <div class="mb-3">
                    <label for="cardNumber" class="form-label">Nomor Kartu Kredit</label>
                    <input type="text" class="form-control" id="cardNumber" placeholder="Nomor kartu">
                </div>
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label for="cardExp" class="form-label">Masa Berlaku</label>
                        <input type="text" class="form-control" id="cardExp" placeholder="MM/YY">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="cardCvv" class="form-label">CVV</label>
                        <input type="text" class="form-control" id="cardCvv" placeholder="CVV">
                    </div>
                </div>
            </div>
            <!-- Ringkasan Pesanan -->
            <div class="col-md-5">
                <div class="card">
                    <div class="card-header bg-light">
                        <h5 class="mb-0">Ringkasan Pesanan</h5>
                    </div>
                    <div class="card-body">
                        <ul class="list-group mb-3">
                            @foreach ($cart->items as $item)
                                <li class="list-group-item d-flex justify-content-between lh-sm">
                                    <div>
                                        <h6 class="my-0">{{ $item->itemable->name }} </h6>
                                    </div>
                                    <span
                                        class="text-muted">Rp.{{ number_format($item->itemable->price, 0, ',', '.') }}</span>
                                </li>
                            @endforeach
                            <li class="list-group-item d-flex justify-content-between">
                                <span>Subtotal</span>
                                <strong>Rp.{{ number_format($cart->calculatedPriceByQuantity(), 0, ',', '.') }}</strong>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <span>Total</span>
                                <strong>Rp.{{ number_format($cart->calculatedPriceByQuantity(), 0, ',', '.') }}</strong>
                            </li>
                        </ul>
                    </div>
                    <form action="{{ route('checkout.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="products[{{ $item->itemable->id }}][product_id]"
                            value="{{ $item->itemable->id }}">
                        <input type="hidden" name="products[{{ $item->itemable->id }}][name]"
                            value="{{ $item->itemable->name }}">
                        <input type="hidden" name="products[{{ $item->itemable->id }}][price]"
                            value="{{ $item->itemable->price }}">
                        <input type="hidden" name="products[{{ $item->itemable->id }}][quantity]"
                            value="{{ $item->quantity }}">
                        <input type="hidden" name="products[{{ $item->itemable->id}}][storage]" 
                            value="{{ $item->storage }}">
                        <button class="btn btn-outline-primary w-100 mt-3" type="submit">Pesan Sekarang</button>
                        <a href="/cart" class="btn btn-outline-primary w-100 mt-2">Kembali ke Keranjang</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>