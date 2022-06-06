@extends('frontend/master')

{{-- apabila 1 baris --}}
@section('title' , 'Detail Challenge')

@section('content')
{{-- Detail Challenge --}}
<section id="header">
    <div class="container">
        <div class="detail-challenge-page text-center">
            <div class="title-detail-challenge">
                <div class="box-image-challenge">
                    <img src="{{ asset('img/challenge/challenge1.png') }}" alt="challenge" class="img-detail-challenge">
                </div>
                <h2 class="title-design-product">Redesign Sportify Challenge</h2>
            </div>
            <p class="desc-detail-challenge">Redesign halaman play music pada aplikasi sportify</p>
            <a href="#" class="btn btn-primary" style="margin-top: 32px">Beli Sekarang</a>
        </div>
    </div>
</section>

{{-- Deskripsi --}}
<section id="desc-challenge">
    <div class="container">
        <h5 class="title-detail-desc">Description</h5>
        <p class="desc-detail-challenge">The Design Agency Website Challenge is here to put your design skills to the
            test this week! Create your very own Design Agency Website. You have maximum freedom to create the design of
            your dreams!, We want you to have as much freedom as you need. Don’t hesitate to try out interesting
            techniques and show your personality in your work. The only thing you need to do is make sure you stick to
            the topic and you only submit one file for this challenge.
        </p>
        <img src="{{ asset('img/challenge/detail_challenge1.png') }}" alt="description" class="img-detail-desc">
    </div>
</section>

{{-- price & deadline --}}
<section id="desc-challenge">
    <div class="container">
        <h5 class="title-detail-desc">Prize and Deadline</h5>
        <p class="desc-detail-challenge">The winner will have their best work featured in the UpLabs newsletter and
            shared with 1,000,000+ professionals from around the world including employees from companies such as
            Google, Airbnb, and Facebook. The winner will also be invited to join the community of UpLabs Premium
            Sellers.
        </p>
        <p class="desc-detail-challenge">Registration & submission: <span style="font-weight: 600; color: #000">May 30 →
                June 12 (2 weeks)</span>
        </p>
        <p class="desc-detail-challenge">Voting: <span style="font-weight: 600; color: #000">June 13 → June 26 (2 weeks)
                Midnight PST</span>
        </p>
        <p class="desc-detail-challenge">Winner announced: <span style="font-weight: 600; color: #000">June 27!</span>
        </p>
    </div>
</section>

@endsection