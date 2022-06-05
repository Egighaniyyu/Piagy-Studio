@extends('frontend/master')

{{-- apabila 1 baris --}}
@section('title' , 'About')

@section('content')
{{-- about --}}
<section id="header">
    <div class="container">
        <div class="text-center">
            <h1 class="text-header-blue">Help Designer to Grow Up</h1>
            <h4 class="text-subheader-secondary">Piagy Studio merupakan platform untuk designer bisa menunjukan karya
                terbaik mereka</h4>
            <img src="{{ asset('img/jumbo-about.png') }}" alt="jumbotron" class="img-about">
            <div class="data-user">
                <div class="detail-data-user">
                    <h5 class="quan-data">2.300</h5>
                    <p class="text-data">Premium Member</p>
                </div>
                <div class="detail-data-user">
                    <h5 class="quan-data">4.000</h5>
                    <p class="text-data">UI Design</p>
                </div>
                <div class="detail-data-user">
                    <h5 class="quan-data">4.000</h5>
                    <p class="text-data">Download Every Day</p>
                </div>
            </div>
        </div>
        <div class="benefit">
            <img src="{{ asset('img/best_platform.png') }}" alt="best platform">
            <div class="text-benefit">
                <h1 class="text-header-blue">Help Designer to Grow Up</h1>
                <h4 class="text-subheader-secondary">Piagy Studio merupakan platform untuk designer bisa menunjukan
                    karya
                    terbaik mereka</h4>
            </div>
        </div>
        <div class="benefit">
            <div class="text-benefit">
                <h1 class="text-header-blue">Save Money for Your StartUp</h1>
                <h4 class="text-subheader-secondary">Dengan tujuan kami membantu para perintis startup, dapatkan harga
                    spesial dari kami</h4>
            </div>
            <img src="{{ asset('img/save_money.png') }}" alt="best platform">
        </div>
    </div>
</section>

@endsection