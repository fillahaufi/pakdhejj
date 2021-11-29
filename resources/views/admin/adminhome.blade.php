@extends('admin/adminlayout')

@section('content')

<div class="uk-container uk-container-xlarge uk-margin-medium-top uk-margin-medium-bottom">
    <h1 class="uk-margin-medium-bottom">Dashboard</h1>
    <div class="uk-child-width-1-2@s" uk-grid>
        <div class="uk-child-width-1-1@s uk-margin-medium-bottom" uk-grid style="height: auto; overflow-y: hidden">
            <div class="uk-child-width-1-2@s" uk-grid style="width: -webkit-fill-available; height: fit-content">
                <div style="height: fit-content">
                    <div class="uk-card uk-card-secondary uk-card-hover uk-card-body uk-light uk-margin-small">
                        <h3 class="uk-card-title">Total Produk</h3>
                        <h2>{{ $nproduk }}</h2>
                        {{-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p> --}}
                    </div>
                </div>
                <div style="height: fit-content">
                    <div class="uk-card uk-card-secondary uk-card-hover uk-card-body uk-light uk-margin-small">
                        <h3 class="uk-card-title">Jumlah Penjualan</h3>
                        <h2>{{ $nselling }}</h2>
                        {{-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p> --}}
                    </div>
                </div>
            </div>
            <div class="" style="height: -webkit-fill-available">
                <div class="uk-card uk-card-secondary uk-card-hover uk-card-body uk-light uk-margin-small" style="height: 100%">
                    <h3 class="uk-card-title">Kelola Produk</h3>
                    <div class="uk-overflow-auto" style="max-height: 280px;">
                        <table class="uk-table uk-table-small uk-table-divider uk-table-middle">
                            <thead>
                                <tr>
                                    <th>Nama Produk</th>
                                    <th>Status</th>
                                    <th>Jumlah Penjualan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($nproduk > 0)
                                    @foreach ($allproduk as $produk)
                                        <tr>
                                            <td style="text-transform: capitalize">{{ $produk->nama }}</td>
                                            <td>
                                                @if ($produk->isavail == 0)
                                                    Non-Aktif
                                                @else
                                                    Aktif
                                                @endif
                                            </td>
                                            <td>133</td>
                                        </tr>
                                    @endforeach
                                @else
                                    <p>Tidak ada produk</p>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="uk-child-width-1-1@s uk-margin-remove-top uk-margin-medium-bottom" uk-grid>
            <div>
                <div class="uk-card uk-card-secondary uk-card-hover uk-card-body uk-light uk-margin-small" style="height: 100%">
                    <h3 class="uk-card-title">Penjualan</h3>
                    <canvas id="myChart" width="400" height="300"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js@3.6.0/dist/chart.min.js"></script>
<script>
    const ctx = document.getElementById('myChart').getContext('2d');
    const myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Jan-Feb', 'Mar-Apr', 'Mei-Jun', 'Jul-Aug', 'Sept-Okt', 'Nov-Des'],
            datasets: [{
                label: '# of Votes',
                data: [12, 19, 3, 5, 2, 3],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>

@endsection