@extends('user.components.base', ['title' => 'Test Result'])
@section('content')
    <section id="payment-success-first" style="background-color: #F90965;">
        <div class="payment-success-first-wrap">
            <img src="{{ asset('assets/images/payment-success/bg-img.png') }}" class="img-fluid" alt="bg-img">
            <div class="payment-logo-sec">
                <img src="{{ asset('assets/image-new/icon/doctor.svg') }}" alt="success-img">
            </div>
        </div>
        <div class="payment-success-second-wrapper" style="padding-bottom: 20px">
            <div class="container">
                <div class="payment-success-second">
                    <div class="container">
                        <div class="payment-success-second-wrap">
                            <h1 class="success-title">19<span>pt</span></h1>
                            <h1 class="success-title-risk">High Risk!</h1>
                            <div class="success-img mt-24">
                            </div>
                            <p class="success-para">Resiko tinggi. Segera dilakukan perawatan di Rumah Sakit.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="Backtohome">
            <a href="{{ route('test-detail') }}" class="detail mb-3">Lihat Detail</a>
            <a href="{{ route('test-page') }}" class="test-again">Test Ulang</a>
        </div>
    </section>
@endsection
