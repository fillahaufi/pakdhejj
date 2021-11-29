@extends('admin/adminlayout')

@section('content')

<div class="uk-container uk-container-xlarge uk-margin-medium-top uk-margin-medium-bottom">
    <h1 class="uk-margin-medium-bottom">Penjualan</h1>
    <div class="" style="height: -webkit-fill-available">
        <div class="uk-card uk-card-secondary uk-card-hover uk-card-body uk-light uk-margin-small" style="height: 100%">
            {{-- <h3 class="uk-card-title">Kelola Produk</h3> --}}
            <div class="uk-overflow-auto" style="height: 400px;">
                <table class="uk-table uk-table-small uk-table-divider uk-table-justify">
                    <thead>
                        <tr>
                            <th>Atas Nama</th>
                            <th>Timestamp</th>
                            <th>Status</th>
                            <th>Total</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($nselling > 0)
                            @foreach ($allselling as $selling)
                                <tr>
                                    <td>{{ $selling->atas_nama }}</td>
                                    <td>{{ $selling->created_at }}</td>
                                    <td>
                                        @if ($selling->isdone == 0)
                                            Menunggu konfirmasi
                                        @else
                                            Terkonfirmasi
                                        @endif
                                    </td>
                                    <td>Rp <span>{{ $selling->total_harga }}</span></td>
                                    <td>
                                        <button class="uk-button uk-button-default" type="button" href="#modal-overflow" uk-toggle>Lihat Pesanan</button>
                                        {{-- <button class="uk-button uk-button-primary" type="button">Terima Pesanan</button> --}}
                                        <button class="uk-button uk-button-danger" type="button">Batalkan</button>
                                        {{-- <a class="uk-button uk-button-default" href="#modal-overflow" uk-toggle>Open</a> --}}

                                        <div id="modal-overflow" uk-modal>
                                            <div class="uk-modal-dialog">

                                                <button class="uk-modal-close-default" type="button" uk-close></button>

                                                <div class="uk-modal-header">
                                                    <h2 class="uk-modal-title">{{ $selling->atas_nama }}</h2>
                                                </div>

                                                <div class="uk-modal-body" uk-overflow-auto>
                                                    <div class="uk-overflow-auto" style="height: 400px;">
                                                        <table class="uk-table uk-table-small uk-table-divider uk-table-justify">
                                                            <thead>
                                                                <tr>
                                                                    <th>Nama Produk</th>
                                                                    <th>Tipe</th>
                                                                    <th>Jumlah</th>
                                                                    <th>Harga</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                {{-- @foreach ($collection as $item)
                                                                    <tr>
                                                                        <td>Cappucino</td>
                                                                        <td>Dingin</td>
                                                                        <td>1</td>
                                                                        <td>Rp <span>(harga)</span></td>
                                                                    </tr>
                                                                @endforeach --}}
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                
                                                <div class="uk-modal-footer uk-text-left">
                                                    <div>TOTAL : Rp <span>{{ $selling->total_harga }}</span></div>
                                                </div>

                                                <div class="uk-modal-footer uk-text-right">
                                                    <button class="uk-button uk-button-default uk-modal-close" type="button">Cancel</button>
                                                    <button class="uk-button uk-button-primary" type="button">Terima Pesanan</button>
                                                </div>

                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <p>Tidak ada pemesanan</p>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="uk-container uk-container small uk-margin-large-top" style="height: -webkit-fill-available">
        <h3>Riwayat Pemesanan</h3>
        <div class="uk-card uk-card-secondary uk-card-hover uk-card-body uk-light uk-margin-small" style="height: 100%">
            {{-- <h3 class="uk-card-title">Kelola Produk</h3> --}}
            <div class="uk-overflow-auto" style="height: 400px;">
                <table class="uk-table uk-table-small uk-table-divider uk-table-justify">
                    <thead>
                        <tr>
                            <th>Atas Nama</th>
                            <th>Timestamp</th>
                            <th>Status</th>
                            <th>Total</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Budi</td>
                            <td>(waktu)</td>
                            <td>Berhasil</td>
                            <td>Rp <span>(harga)</span></td>
                            <td>
                                <button class="uk-button uk-button-default" type="button">Lihat Pesanan</button>
                                {{-- <button class="uk-button uk-button-primary" type="button">Terima Pesanan</button> --}}
                                {{-- <button class="uk-button uk-button-danger" type="button">Delete</button>s --}}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection