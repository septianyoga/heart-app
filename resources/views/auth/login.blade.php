@extends('components.layout', ['title' => 'Heart App - Login'])

@section('content')
    <section id="sign-in-screen">
        <div class="logo-img">
            <img src="assets/image-new/logo-heart.png" width="200" alt="">
        </div>
        <div class="container">
            <div class="sign-in-screen_full">
                <div class="sign-in-screen-top">
                    <h1 class="text-center">Selamat Datang</h1>
                    <form class="sign-in-form mt-16" action="/login" method="post">
                        @csrf
                        <div class="form-sec">
                            <label class="txt-lbl">Email</label><br>
                            <input type="email" id="email" name="email" placeholder="Email in here"
                                class="txt-input">
                            @error('email')
                                <div class="form_bottom_boder">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-sec mt-32">
                            <label class="txt-lbl">Password</label><br>
                            <input type="password" id="password" name="password" placeholder="Password in here"
                                class="txt-input">
                            @error('password')
                                <div class="form_bottom_boder">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="sign-in mt-32">
                            <button type="submit">Sign In</button>
                        </div>
                    </form>
                    <div class="block-footer">
                        <p>Don’t have an account? <a href="/register">Sign Up</a></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-icon login d-flex justify-content-center align-items-center">
            <div class="container">
                <img src="{{ asset('assets/image-new/footer.png') }}" alt="" style="width: 100%">
            </div>
        </div>
    </section>
@endsection
