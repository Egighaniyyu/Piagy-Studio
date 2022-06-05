@extends('frontend/master')

{{-- apabila 1 baris --}}
@section('title' , 'Piagy Studio')

@section('content')
{{-- Header Designer --}}
<section id="header">
    <div class="container">
        <div class="designer-product text-center">
            <img src="{{ asset('img/designer/designer1.png') }}" alt="designer" class="img-designer-product">
            <h2 class="title-design-product">Safar - Real Estate App UI Kit</h2>
            <p class="designer-product">from <span style="color: #5b7db1">Hello Design</span></p>
            <div class="price-product text-center">
                <h4 class="price-design-product">Rp. 400.000</h4>
                <a href="#" class="btn btn-primary">Beli Sekarang</a>
            </div>
        </div>
    </div>
</section>

{{-- List Product --}}
<section id="list-product">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <img src="{{ asset('img/detail-product/product1.png') }}" alt="product1" class="img-detail-product">
            </div>
            <div class="col-md-6 col-sm-12">
                <img src="{{ asset('img/detail-product/product2.png') }}" alt="product2" class="img-detail-product">
            </div>
            <div class="col-md-6 col-sm-12">
                <img src="{{ asset('img/detail-product/product3.png') }}" alt="product3" class="img-detail-product">
            </div>
            <div class="col-md-6 col-sm-12">
                <img src="{{ asset('img/detail-product/product4.png') }}" alt="product4" class="img-detail-product">
            </div>
            <div class="col-md-6 col-sm-12">
                <img src="{{ asset('img/detail-product/product5.png') }}" alt="product5" class="img-detail-product">
            </div>
            <div class="col-md-6 col-sm-12">
                <img src="{{ asset('img/detail-product/product6.png') }}" alt="product6" class="img-detail-product">
            </div>
        </div>
    </div>
</section>
@endsection