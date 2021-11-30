@extends('layout')

@section('content')
{{-- <div style="height: 41vw">
    <video autoplay muted loop id="myVideo" style="width: 100%;">
        <source src="{{url('/vid/coffee.mp4')}}" type="video/mp4">
    </video>
    <div style="text-align: center; margin-top: -31vw; position: relative; z-index: 1; display: flex; flex-direction: row; align-items: center; place-content: center">
        <img src="{{url('/img/logo.png')}}" alt="" style="width: 22vw">
        <div style="margin: 3vw; text-align: -webkit-left">
            <h1 class="text-white" style="font-size: 7vw">P. DHE JJ COFFEE</h1>
            <a href="#orderpage" style="width: 100%">
                <button class="btn btn-dark" style="width: 100%">
                    <p class="text-white" style="font-size: 2vw; margin-bottom: 0; text-transform: uppercase">Pesan Sekarang</p>
                </button>
            </a>
        </div>
    </div>
    <a href="#orderpage">
        <div style="position: absolute; top: 75%; left: 50%; transform: translate(-50%, 0%); text-align: center; width: 100%">
            <h4 class="text-white">START ORDER</h4>
            <img src="{{url('/img/down.png')}}" alt="" style="width: 50px">
        </div>
    </a>
</div> --}}
<div id="jumbotron" style="height: 100vh" uk-parallax="bgy: -400">
    <div class="d-flex flex-column me-3" style="height: -webkit-fill-available; place-content: center; width: fit-content; margin-left: 5%">
        <h1 class="mb-4" style="font-weight: 700; color: #483434; font-size: 4rem">P. Dhe JJ Coffee</h1>
        <a href="#orderpage" style="width: 100%">
            <button class="btn btn-dark" style="text-transform: uppercase; font-weight: 500; width: 100%; font-size: 1.5rem">
                Pesan Sekarang
            </button>
        </a>
    </div>
</div>
<div id="service" class="section">
    <div class="title" style="text-align: -webkit-center">
        <h1 class="m-0" style="text-align: center; text-align: -webkit-center">Layanan Kami</h1> <br>
        <p style="width: 50%">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Est amet magni quibusdam, doloremque et perferendis</p>
    </div>
    <div>
        
    </div>
</div>
<div id="orderpage" class="section">
    <div class="title" style="text-align: -webkit-center">
        <h1 class="m-0" style="text-align: center; text-align: -webkit-center">Menu Kami</h1> <br>
        <p style="width: 50%">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Est amet magni quibusdam, doloremque et perferendis</p>
    </div>
    <div class="mb-5">
        <h3>Our Favorite</h3>
        <div id="fav" uk-slider style="width: 75%">
            <div class="uk-position-relative uk-visible-toggle" tabindex="-1">
                <ul class="uk-slider-items uk-child-width-1-2@s uk-child-width-1-3@m uk-child-width-1-4@l" style=" max-height: 500px">
                    @foreach ($produkselling as $produk)
                        <li class="m-3" style="overflow: hidden;">
                            {{-- <div style="
                            margin: 0;
                            position: relative;
                            top: 50%;
                            -ms-transform: translateY(-50%);
                            transform: translateY(-50%);
                            height: -webkit-fill-available;
                            align-items: center">
                                <img src="{{ url('/product_img'.'/'.$produk->img_path) }}" alt="" style="width: 100%">
                            </div>
                            <div class="uk-position-bottom uk-panel m-3">
                                {{-- <h1>Kopi apatuh</h1>
                                <h3>Rp <span>20,000</span></h3> --}}
                                {{-- <div class="d-flex flex-row">
                                </div> 
                                <h3 class="uk-card-title mb-0 fw-bold text-white" style="text-transform: uppercase">{{ $produk->nama }}</h3>
                                <h4 class="mt-0 fw-bold" style="color: #A0583C">Rp <span>{{ $produk->harga }}</span></h4>
                                <button class="add-to-cart uk-button uk-button-secondary" data-name="{{ $produk->nama }}" data-price="{{ $produk->harga }}" onclick="UIkit.notification({message: 'Pesanan berhasil', pos: 'top-right'})">+ Add to cart</button>
                            </div> --}}
                            <div class="uk-card uk-card-default uk-card-hover" style="cursor: pointer; height: 100%">
                                <div class="uk-card-media-top" style="max-width: 100%; max-height: 230px; overflow: hidden; display: flex; align-items: center" href="#modal-full" uk-toggle>
                                    <img style="width: 100%; height: -webkit-fill-available;" src="{{ url('/product_img'.'/'.$produk->img_path) }}" alt="">
                                </div>
                                <div class="uk-card-body p-4 d-flex flex-column" style="min-height: 203px">
                                    <h3 class="uk-card-title mb-2 fw-bold" style="text-transform: uppercase">{{ $produk->nama }}</h3>
                                    <h4 class="mt-0 fw-bold" style="color: #A0583C">Rp <span>{{ $produk->harga }}</span></h4>
                                    <button href="#" class="add-to-cart uk-button uk-button-secondary mt-auto" style="float: right" data-name="{{ $produk->nama }}" data-price="{{ $produk->harga }}" onclick="UIkit.notification({message: 'Pesanan berhasil', pos: 'top-right'})">+ Add to cart</button>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>

                <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>

            </div>

            <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>

        </div>
    </div>
    <div class="uk-margin-small-top uk-padding-small mb-5" >
        <div uk-filter="target: .js-filter">

            <ul class="uk-subnav uk-subnav-pill">
                <li class="uk-active" uk-filter-control><a href="#" style="text-decoration: none;">All</a></li>
                <li uk-filter-control="[data-color='kopi']"><a href="#" style="text-decoration: none;">Kopi - kopian</a></li>
                <li uk-filter-control="[data-color='susu']"><a href="#" style="text-decoration: none;">Susu - susuan</a></li>
                {{-- <li uk-filter-control="[data-color='laris']"><a href="#" style="text-decoration: none;">Paling laris</a></li> --}}
            </ul>
        
            <ul class="js-filter uk-child-width-1-2@s uk-child-width-1-3@m uk-child-width-1-4@l uk-text-center" uk-grid>
                @if($allproduk->count() > 0)
                    @foreach ($allproduk as $produk)
                        <li @if($produk->jenis == 1)
                            data-color="kopi"
                        @else
                            data-color="susu"
                        @endif>
                            <div class="uk-card uk-card-default uk-card-hover" style="cursor: pointer; height: 100%">
                                <div class="uk-card-media-top" style="max-width: 100%; max-height: 260px; overflow: hidden; display: flex; align-items: center" href="#modal-full" uk-toggle>
                                    <img style="width: 100%; height: -webkit-fill-available;" src="{{ url('/product_img'.'/'.$produk->img_path) }}" alt="">
                                </div>
                                <div class="uk-card-body p-4 d-flex flex-column" style="min-height: 203px">
                                    <h3 class="uk-card-title mb-2 fw-bold" style="text-transform: uppercase">{{ $produk->nama }}</h3>
                                    <h4 class="mt-0 fw-bold" style="color: #A0583C">Rp <span>{{ $produk->harga }}</span></h4>
                                    <button href="#" class="add-to-cart uk-button uk-button-secondary mt-auto" style="float: right" data-name="{{ $produk->nama }}" data-price="{{ $produk->harga }}" onclick="UIkit.notification({message: 'Pesanan berhasil', pos: 'top-right'})">+ Add to cart</button>
                                </div>
                            </div>
                        </li>
                    @endforeach
                @else
                    <p>Tidak ada produk</p>
                @endif
            </ul>
        </div>
    </div>
</div>
@endsection