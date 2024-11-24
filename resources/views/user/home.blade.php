@extends('user.components.base', ['title' => 'HomePage'])
@section('content')
    <section id=homepage2-sec>
        <div class="homepage2-first-sec">
            <div class="ilustrasi">
                <img src="{{ asset('assets/image-new/ilustrasi/char.png') }}" alt="">
            </div>
            <div class="profile-info">
                <h1 class="profile-name">Welcome, Iqbal</h1>
            </div>
        </div>
        <div class="container">
            <div class="serachbar-homepage2 mt-24">
                <div class="input-group">
                    <span class="input-group-text search-iconn">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M10.9395 1.9313C5.98074 1.9313 1.94141 5.97063 1.94141 10.9294C1.94141 15.8881 5.98074 19.9353 10.9395 19.9353C13.0575 19.9353 15.0054 19.193 16.5449 17.9606L20.293 21.7067C20.4821 21.888 20.7347 21.988 20.9967 21.9854C21.2587 21.9827 21.5093 21.8775 21.6947 21.6924C21.8801 21.5073 21.9856 21.2569 21.9886 20.9949C21.9917 20.7329 21.892 20.4802 21.7109 20.2908L17.9629 16.5427C19.1963 15.0008 19.9395 13.0498 19.9395 10.9294C19.9395 5.97063 15.8982 1.9313 10.9395 1.9313ZM10.9395 3.93134C14.8173 3.93134 17.9375 7.05153 17.9375 10.9294C17.9375 14.8072 14.8173 17.9352 10.9395 17.9352C7.06162 17.9352 3.94141 14.8072 3.94141 10.9294C3.94141 7.05153 7.06162 3.93134 10.9395 3.93134Z"
                                fill="#5FC613"></path>
                        </svg>
                    </span>
                    <input type="text" placeholder="Search....." class="form-control search-text">
                </div>
            </div>
        </div>
        <div class="homepage2-third-sec mt-24">
            <div class="container">
                {{--  Foreach  --}}
                <div class="prodcut-sec-slide">
                    <div class="prodcut-sec-slide-full">
                        <div class="slider-img-sec">
                            <img src="{{ asset('assets/image-new/user.jpg') }}" alt="">
                        </div>
                        <div class="slider-content-sec">
                            <div class="slider-content-sec-full">
                                <h3 class="slider-pro-title">Dr. Iqbal</h3>
                                <div class="status mt-2">
                                    <div class="d-flex justify-content-start align-items-center">
                                        <div class="sibuk me-2"></div>
                                        <div class="kosong me-2"></div>
                                    </div>
                                </div>
                                <h3 class="slider-pro-title mt-4">Jadwal Dokter</h3>
                                <p class="slider-pro-subtitle">Senin - Jumat</p>
                                <p class="slider-pro-subtitle">08:00 - 16:00</p>
                            </div>
                        </div>
                    </div>
                </div>
                {{--  Foreach  --}}
            </div>
        </div>
        <div class="homepage2-fourth-sec mt-24">
            <div class="container">
                <div class="tranding-item-sec">
                    <div class="home-tranding-first">
                        <h2 class="home-cate-title">Edukasi</h2>
                    </div>
                    <div class="home-tranding-second">
                        <a href="{{ route('berita') }}">
                            <p class="see-all-txt">
                                See all
                                <span>
                                    <img src="{{ asset('assets/images/homepage/see-all-icon.svg') }}" alt="right-arrow">
                                </span>
                            </p>
                        </a>
                    </div>
                </div>
                <div class="notification-page-full mt-24">
                    {{--  Foreach  --}}
                    <a href="{{ route('detail-berita') }}">
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

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const notifications = document.querySelectorAll('.notification-page-sec');
            notifications.forEach((notification, index) => {
                if (index >= 5) {
                    notification.style.display = 'none';
                }
            });
        });
    </script>
@endsection
