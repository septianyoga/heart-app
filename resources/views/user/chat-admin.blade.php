@extends('user.components.base', ['title' => 'Riwayat'])
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
                    <p>Live Chat</p>
                </div>
            </div>
        </div>
        <div class="navbar-boder"></div>
    </header>

    <section class="chat-section">
        <div class="container">
            <div class="chat-box">
                <div class="chat-message admin-message">
                    <p>Halo, ada yang bisa kami bantu?</p>
                </div>
                <div class="chat-message user-message">
                    <p>Tolong Cek Kesehatan saya donk</p>
                </div>
            </div>
            <form action="" method="POST" class="chat-input-form">
                @csrf
                <div class="input-group">
                    <input type="text" name="message" class="form-control border-secondary" placeholder="Tulis pesan..."
                        required>
                    <button type="submit" class="btn btn-primary">
                        <img src="{{ asset('assets/image-new/send.png') }}" alt="Send" style="width: 24px"
                            height="24px">
                    </button>
                </div>
            </form>
        </div>
    </section>
@endsection
