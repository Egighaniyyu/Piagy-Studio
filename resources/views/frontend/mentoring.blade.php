@extends('frontend/master')

{{-- apabila 1 baris --}}
@section('title' , 'Mentoring')

@section('content')

{{-- Header --}}
<section id="header">
    <div class="container">
        <div class="header">
            <div class="row">
                <div class="col-md-7">
                    <h1 class="text-header">Find Best Mentor, Get Better Insight</h1>
                    <h4 class="text-subheader">Dapatkan saran yang mendukung dan bermanfaat
                        dari ahlinya untuk membangun karir impian kamu.</h4>
                    <a href="#mentor" class="btn btn-primary-light">Lihat Mentor</a>
                </div>
                <div class="col-md-5">
                    <img src="{{asset('img/jumbo-mentoring.png')}}" alt="img-jumbo">
                </div>
            </div>
        </div>
    </div>
</section>

{{-- mentor --}}
<section id="mentor">
    <div class="container">
        <h2 class="text-title">Challenge For You</h2>
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="card-mentor">
                    <div class="profile-mentor">
                        <div class="card-img-mentor">
                            <img src="{{asset('img/mentor/mentor1.png')}}" alt="mentor" class="img-mentor">
                        </div>
                        <div class="detail-mentor">
                            <p class="name-mentor">Ani Pitriya</p>
                            <p class="job-mentor">UI UX Designer at Tokopedia</p>
                        </div>
                    </div>
                    <div class="text-topics">
                        <p class="title-topics">Topik Mentoring</p>
                    </div>
                    <div class="list-topics">
                        <p class="text-topics">Membuat & Review Portfolio UI/UX</p>
                        <p class="text-topics">Persiapan Menghadapi Interview UI/UX</p>
                        <p class="text-topics">Membuat Komponen Desain di Figma</p>
                    </div>
                    <a href="#" class="btn btn-primary btn-book-mentor">Booking Sekarang</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="card-mentor">
                    <div class="profile-mentor">
                        <div class="card-img-mentor">
                            <img src="{{asset('img/mentor/mentor1.png')}}" alt="mentor" class="img-mentor">
                        </div>
                        <div class="detail-mentor">
                            <p class="name-mentor">Ani Pitriya</p>
                            <p class="job-mentor">UI UX Designer at Tokopedia</p>
                        </div>
                    </div>
                    <div class="text-topics">
                        <p class="title-topics">Topik Mentoring</p>
                    </div>
                    <div class="list-topics">
                        <p class="text-topics">Membuat & Review Portfolio UI/UX</p>
                        <p class="text-topics">Persiapan Menghadapi Interview UI/UX</p>
                        <p class="text-topics">Membuat Komponen Desain di Figma</p>
                    </div>
                    <a href="#" class="btn btn-primary btn-book-mentor">Booking Sekarang</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="card-mentor">
                    <div class="profile-mentor">
                        <div class="card-img-mentor">
                            <img src="{{asset('img/mentor/mentor1.png')}}" alt="mentor" class="img-mentor">
                        </div>
                        <div class="detail-mentor">
                            <p class="name-mentor">Ani Pitriya</p>
                            <p class="job-mentor">UI UX Designer at Tokopedia</p>
                        </div>
                    </div>
                    <div class="text-topics">
                        <p class="title-topics">Topik Mentoring</p>
                    </div>
                    <div class="list-topics">
                        <p class="text-topics">Membuat & Review Portfolio UI/UX</p>
                        <p class="text-topics">Persiapan Menghadapi Interview UI/UX</p>
                        <p class="text-topics">Membuat Komponen Desain di Figma</p>
                    </div>
                    <a href="#" class="btn btn-primary btn-book-mentor">Booking Sekarang</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="card-mentor">
                    <div class="profile-mentor">
                        <div class="card-img-mentor">
                            <img src="{{asset('img/mentor/mentor1.png')}}" alt="mentor" class="img-mentor">
                        </div>
                        <div class="detail-mentor">
                            <p class="name-mentor">Ani Pitriya</p>
                            <p class="job-mentor">UI UX Designer at Tokopedia</p>
                        </div>
                    </div>
                    <div class="text-topics">
                        <p class="title-topics">Topik Mentoring</p>
                    </div>
                    <div class="list-topics">
                        <p class="text-topics">Membuat & Review Portfolio UI/UX</p>
                        <p class="text-topics">Persiapan Menghadapi Interview UI/UX</p>
                        <p class="text-topics">Membuat Komponen Desain di Figma</p>
                    </div>
                    <a href="#" class="btn btn-primary btn-book-mentor">Booking Sekarang</a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection