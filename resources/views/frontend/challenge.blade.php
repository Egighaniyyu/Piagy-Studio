@extends('frontend/master')

{{-- apabila 1 baris --}}
@section('title' , 'Challenge')

@section('content')
{{-- Header --}}
<section id="header">
    <div class="container">
        <div class="header">
            <div class="row">
                <div class="col-md-7">
                    <h1 class="text-header">Challenge</h1>
                    <h4 class="text-subheader">Kami meluncurkan Challenge secara berkala sehingga Kamu dapat melatih
                        keahlianmu,
                        dan mendapatkan hadiah menarik. Jelajahi Challenge seru kami dan kirimkan karya kamu!</h4>
                </div>
                <div class="col-md-5">
                    <div class="card-challenge-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="box-logo-challenge">
                                <img src="{{asset('img/challenge/challenge1.png')}}" alt="challenge"
                                    class="img-challenge">
                            </div>
                            <div class="div">
                                <p class="date-challenge">14 Juni</p>
                            </div>
                        </div>
                        <h4 class="text-challenge-header">
                            Redesign Sportify Challenge
                        </h4>
                        <p class="text-detail-challenge-header">Redesign halaman play music pada aplikasi sportify</p>
                        <a href="#" class="btn btn-primary btn-challenge">Detail</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Challenge for you --}}
<section id="challenge">
    <div class="container">
        <h2 class="text-title">Challenge For You</h2>
        <div class="list-challenge">
            <div class="d-flex justify-content-between align-items-center">
                <div class="detail-challenge">
                    <div class="list-logo-challenge">
                        <img src="{{asset('img/challenge/challenge1.png')}}" alt="challenge" class="list-img-challenge">
                    </div>
                    <div class="list-detail-challenge">
                        <h4 class="text-challenge">
                            Redesign Sportify Challenge
                        </h4>
                        <p class="text-detail-challenge">Redesign halaman play music pada aplikasi sportify</p>
                    </div>
                </div>
                <div class="chalanggers">
                    <p class="text-user-challenge">29 Challenge</p>
                </div>
            </div>
        </div>
        <div class="list-challenge">
            <div class="d-flex justify-content-between align-items-center">
                <div class="detail-challenge">
                    <div class="list-logo-challenge">
                        <img src="{{asset('img/challenge/challenge1.png')}}" alt="challenge" class="list-img-challenge">
                    </div>
                    <div class="list-detail-challenge">
                        <h4 class="text-challenge">
                            Redesign Sportify Challenge
                        </h4>
                        <p class="text-detail-challenge">Redesign halaman play music pada aplikasi sportify</p>
                    </div>
                </div>
                <div class="chalanggers">
                    <p class="text-user-challenge">29 Challenge</p>
                </div>
            </div>
        </div>
        <div class="list-challenge">
            <div class="d-flex justify-content-between align-items-center">
                <div class="detail-challenge">
                    <div class="list-logo-challenge">
                        <img src="{{asset('img/challenge/challenge1.png')}}" alt="challenge" class="list-img-challenge">
                    </div>
                    <div class="list-detail-challenge">
                        <h4 class="text-challenge">
                            Redesign Sportify Challenge
                        </h4>
                        <p class="text-detail-challenge">Redesign halaman play music pada aplikasi sportify</p>
                    </div>
                </div>
                <div class="chalanggers">
                    <p class="text-user-challenge">29 Challenge</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Winner challenge --}}
<section id="winner-challenge">
    <div class="container">
        <h2 class="text-title">Winner Card Wallet Challenge</h2>
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="text-desc-challenge">
                    Challenge Design card wallet minggu ini untuk mu
                </div>
                <div class="user-winner text-center">
                    <img src="{{asset('img/designer/designer2.png')}}" alt="designer" class="img-winner-challenge">
                    <p class="name-winner-challenge">Lincoln Vaccaro</p>
                    <div class="btn-result">
                        <a href="#" class="btn btn-primary">Lihat Hasil</a>
                    </div>
                </div>
            </div>
            <a class="col-md-3 col-sm-6 card-product" href="{{ route('detail')}}">
                <div class="card">
                    <div class="card-body">
                        <img src="img/products/product1.png" alt="product" class="img-product">
                    </div>
                    <div class="profile-designer m-auto">
                        <img src="img/designer/designer1.png" alt="designer" class="img-designer">
                        <p class="text-designer-sm">Hello Designer</p>
                    </div>
                    <div class="card-desc">
                        <p class="text-title-sm">Shoesly - Brand Market UI Kit</p>
                        <p class="text-price-sm"><span class="text-disc">Rp. 400.000</span>Rp. 200.000</p>
                    </div>
                </div>
            </a>
            <a class="col-md-3 col-sm-6 card-product" href="{{ route('detail')}}">
                <div class="card">
                    <div class="card-body">
                        <img src="img/products/product1.png" alt="product" class="img-product">
                    </div>
                    <div class="profile-designer m-auto">
                        <img src="img/designer/designer1.png" alt="designer" class="img-designer">
                        <p class="text-designer-sm">Hello Designer</p>
                    </div>
                    <div class="card-desc">
                        <p class="text-title-sm">Shoesly - Brand Market UI Kit</p>
                        <p class="text-price-sm"><span class="text-disc">Rp. 400.000</span>Rp. 200.000</p>
                    </div>
                </div>
            </a>
            <a class="col-md-3 col-sm-6 card-product" href="{{ route('detail')}}">
                <div class="card">
                    <div class="card-body">
                        <img src="img/products/product1.png" alt="product" class="img-product">
                    </div>
                    <div class="profile-designer m-auto">
                        <img src="img/designer/designer1.png" alt="designer" class="img-designer">
                        <p class="text-designer-sm">Hello Designer</p>
                    </div>
                    <div class="card-desc">
                        <p class="text-title-sm">Shoesly - Brand Market UI Kit</p>
                        <p class="text-price-sm"><span class="text-disc">Rp. 400.000</span>Rp. 200.000</p>
                    </div>
                </div>
            </a>
        </div>
    </div>
</section>

@endsection