@extends('user.components.base', ['title' => 'Detail Berita'])
@section('content')
    <!-- Header Section Start -->
    <header id="top-navbar" class="top-navbar">
        <div class="container">
            <div class="top-navbar_full">
                <div class="back-btn d-flex align-items-center">
                    <a href="javascript: history.go(-1)">
                        <img src="{{ asset('assets/images/forget-password-screen/back-btn.svg') }}" alt="back-btn-img">
                    </a>
                </div>
                <div class="top-navbar-title d-flex align-items-center">
                    <p>Health App</p>
                </div>
            </div>
        </div>
        <div class="navbar-boder"></div>
    </header>
    <!-- Header Section End -->
    <!--Homepage1 Section Start -->
    <section id="homepage1-sec">
        <div class="homepage-fifth-sec">
            <div class="container">
                <div class="img-item-sec">
                    <div class="img-news">
                        <img src="{{ asset('assets/image-new/jantung-1.jpg') }}" alt="">
                    </div>
                    <div class="content-desc">
                        <h1>Jantung Koroner</h1>
                        <p>13 Juli 2023</p>
                        <h6>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo veniam itaque eveniet
                            illum consectetur in amet quidem mollitia. Voluptates laudantium iste veritatis placeat
                            fuga eum porro, non facilis. Quasi, nisi.
                        </h6>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Homepage1 Section End -->
@endsection
