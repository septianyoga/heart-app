@extends('user.components.base', ['title' => 'Berita'])
@section('content')
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
    <!-- Homepage2 Details Section Start -->
    <section id="test-sec">
        <div class="homepage2-fourth-sec mt-24">
            <div class="container">
                <div class="notification-page-full mt-24">
                    <h1 class="d-none">Notification Page</h1>
                    {{--  Foreach  --}}
                    <a href="home-page1.html">
                        <div class="notification-page-sec">
                            <div class="notification-img">
                                <img src="{{ asset('assets/image-new/jantung.jpeg') }}" alt="notification-img">
                            </div>
                            <div class="notification-content">
                                <h3 class="noti-title">Jantung Koroner</h3>
                                <p class="noti-desc">Jantung Koroner adalah kondisi medis di mana pembuluh darah
                                    yang
                                    memasok darah ke jantung tersumbat atau menyempit.</p>
                                <p class="noti-subtitle mt-8">34 minutes ago</p>
                            </div>
                        </div>
                    </a>
                    {{--  Foreach  --}}
                </div>
            </div>
        </div>
    </section>
@endsection
