<x-layouts.app :title="__('Orders')">
    <x-slot name="title">Orders</x-slot>

    <div class="relative mb-6 w-full">
        <flux:heading size="xl">Pesanan Customer</flux:heading>
        <flux:subheading size="lg" class="mb-6">Manage data Pesanan</flux:subheading>
        <flux:separator variant="subtle" />
    </div>

    <div class="flex justify-between items-center mb-4">
        <div>
            <form action="" method="get">
                @csrf
                <flux:input icon="magnifying-glass" name="q" value="" placeholder="Search Customers" />
            </form>
        </div>

    </div>

    @if(session()->has('successMessage'))
        <div class="mb-3 w-full rounded bg-lime-100 border border-lime-400 text-lime-800 px-4 py-3">
            {{ session()->get('successMessage') }}
        </div>
    @endif

    <div class="overflow-x-auto">
        <table class="min-w-full leading-normal">
            <thead>
                <tr>
                    <th
                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        ID
                    </th>
                    <th
                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        Nama Customer
                    </th>
                    <th
                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        Nama Produk
                    </th>
                    <th
                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        Category
                    </th>
                    <th
                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        Price
                    </th>
                    <th
                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        Qty
                    </th>
                    <th
                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        Strorage
                    </th>
                    <th
                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        Status
                    </th>
                    <th
                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        No. Resi
                    </th>
                    <th
                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        On/Off
                    </th>
                    <th
                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        Created At
                    </th>
                    <th
                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        Actions
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($orders as $order)
                    @php $loopIndex = 0; @endphp
                    @foreach ($order->orderDetails as $detail)
                        <tr>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                @if($loopIndex === 0)
                                    <p class="text-gray-900">{{ $order->id }}</p>
                                @endif
                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                @if($loopIndex === 0)
                                    <p class="text-gray-900">Customer {{ $order->user->name }}</p>
                                @endif
                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <p class="text-gray-900">{{ $detail->product->name }}</p>
                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <p class="text-gray-900">{{ $detail->product->category->name }}</p>
                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <p class="text-gray-900">Rp{{ number_format($detail->subtotal, 0, ',', '.') }}</p>
                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <p class="text-gray-900">{{ $detail->quantity }}</p>
                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <p class="text-gray-900">{{ $detail->storage }}</p>
                            </td>

                            @if($loopIndex === 0)
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    @if($order->status === 'completed')
                                        <span
                                            class="inline-block px-3 py-1 text-sm font-semibold text-green-700 bg-green-100 rounded-full">Selesai</span>
                                    @elseif($order->status === 'processing')
                                        <span
                                            class="inline-block px-3 py-1 text-sm font-semibold text-blue-700 bg-blue-100 rounded-full">Dikirim</span>
                                    @else
                                        <span
                                            class="inline-block px-3 py-1 text-sm font-semibold text-yellow-700 bg-yellow-100 rounded-full">Diproses</span>
                                    @endif
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    @if($order->status === 'completed' || $order->status === 'processing')
                                        <p class="text-gray-900">{{ $order->resi }}</p>
                                    @else
                                        <p class="text-gray-900">N/A</p>
                                    @endif
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm text-gray-900">
                                    <label class="inline-flex items-center cursor-pointer">
                                        <input type="checkbox" class="sr-only peer" checked>
                                        <div
                                            class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-2 peer-focus:ring-blue-500 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-600 relative">
                                        </div>
                                    </label>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm text-gray-900">
                                    {{ now()->subDays($order->id)->format('Y-m-d') }}
                                </td>
                                <td class="px-5 py-5 bg-white text-sm text-gray-900">
                                    <div x-data="{ status: '{{ $order->status }}', resi: '{{ $order->resi }}' }">
                                        <flux:modal.trigger name="edit{{ $order->id }}">
                                            <flux:button>Edit</flux:button>
                                        </flux:modal.trigger>
                                        <flux:modal name="edit{{ $order->id }}" class="md:w-96">
                                            <div class="space-y-6">
                                                <div>
                                                    <flux:heading size="lg">Edit Pesanan #{{ $order->id }}</flux:heading>
                                                    <flux:text class="mt-2 text-sm text-gray-500">
                                                        Hanya status yang bisa diubah. Detail produk tidak dapat diubah.
                                                    </flux:text>
                                                </div>
                                                <form action="{{ route('orders.update', $order->id) }}" method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <flux:input label="Nama Produk" value="{{ $detail->product->name }}" disabled />
                                                    <div>
                                                        <label for="status"
                                                            class="block text-sm font-medium text-gray-700 mb-1">Status</label>
                                                        <select id="status" x-model="status"
                                                            class="w-full border border-gray-300 rounded-md px-3 py-2 text-sm focus:ring focus:ring-blue-200">
                                                            <option class="text-gray-950" value="pending">Diproses</option>
                                                            <option class="text-gray-950" value="processing">Dikirim</option>
                                                            <option class="text-gray-950" value="completed">Selesai</option>
                                                        </select>
                                                    </div>
                                                    <template x-if="status === 'processing'|| status === 'completed'">
                                                        <div>
                                                            <flux:input label="Nomor Resi" placeholder="Masukkan Nomor Resi"
                                                                x-model="resi" />
                                                            <input type="hidden" name="resi" :value="resi">
                                                        </div>
                                                    </template>
                                                    <input type="hidden" name="status" :value="status">
                                                    <div class="flex justify-end pt-4">
                                                        <flux:button variant="primary" data-bs-dismiss="modal" class="me-2">
                                                            Batal
                                                        </flux:button>
                                                        <flux:button type="submit" variant="primary">
                                                            Simpan
                                                        </flux:button>
                                                    </div>
                                                </form>
                                            </div>
                                        </flux:modal>
                                    </div>
                                </td>
                            @else
                                {{-- Kosongkan kolom lainnya --}}
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm"></td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm"></td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm"></td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm"></td>
                                <td class="px-5 py-5 bg-white text-sm"></td>
                            @endif
                        </tr>
                        @php $loopIndex++; @endphp
                    @endforeach
                @endforeach
            </tbody>
        </table>
    </div>
</x-layouts.app>