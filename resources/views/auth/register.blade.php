@extends('components.layout', ['title' => 'Heart App - Login'])

@section('content')
    <section id="sign-in-screen">
        <div class="container">
            <div class="sign-in-screen_full">
                <div class="sign-in-screen-top">
                    <div class="logo-img">
                        <img src="{{ asset('assets/image-new/logo-heart.png') }}" width="200" alt="">
                    </div>
                    <form class="sign-in-form mt-16" method="post" action="/register">
                        @csrf
                        <h1 class="text-center">Register</h1>
                        <div class="form-sec mb-3">
                            <label class="txt-lbl" for="nik">NIK</label><br>
                            <input type="nik" id="nik" name="nik" placeholder="NIK in here" class="txt-input">
                            @error('nik')
                                <div class="form_bottom_boder">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-sec mb-3">
                            <label class="txt-lbl" for="name">Nama Lengkap</label><br>
                            <input type="name" id="name" name="name" placeholder="Name in here"
                                class="txt-input">
                            @error('name')
                                <div class="form_bottom_boder">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-sec mb-3">
                            <label class="txt-lbl" for="no_hp">No Telepon</label><br>
                            <input type="no_hp" id="no_hp" name="no_hp" placeholder="No Telepon in here"
                                class="txt-input">
                            @error('no_hp')
                                <div class="form_bottom_boder">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-sec mb-3">
                            <label class="txt-lbl" for="email">Email</label><br>
                            <input type="email" id="email" name="email" placeholder="Email in here"
                                class="txt-input">
                            @error('email')
                                <div class="form_bottom_boder">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-sec mb-3">
                            <label class="txt-lbl" for="password">Password</label><br>
                            <input type="password" id="password" name="password" placeholder="Password in here"
                                class="txt-input">
                            @error('password')
                                <div class="form_bottom_boder">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-sec mb-3">
                            <label class="txt-lbl" for="password_confirmation">Konfirmasi Password</label><br>
                            <input type="password" id="password_confirmation" name="password_confirmation"
                                placeholder="Password in here" class="txt-input">
                        </div>
                        <div class="form-sec mb-3 p-2">
                            <label class="txt-lbl">Apakah ada BPJS?</label><br>
                            <div class="d-flex align-items-center">
                                <div class="d-flex align-items-center me-3">
                                    <input type="radio" class="me-2" name="bpjs" id="ya" onclick="toggleBPJSForm(true)">
                                    <label for="ya" class="text-nowrap">Ya, Ada</label>
                                </div>
                                <div class="d-flex align-items-center">
                                    <input type="radio" class="me-2" name="bpjs" id="tidak" onclick="toggleBPJSForm(false)">
                                    <label for="tidak" class="text-nowrap">Tidak ada</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-sec mb-3 d-none" id="bpjsForm">
                            <label class="txt-lbl">Nomor BPJS</label><br>
                            <input type="text" inputmode="numeric" id="no_bpjs" name="no_bpjs"
                                placeholder="Nomor BPJS in here" class="txt-input">
                            @error('no_bpjs')
                                <div class="form_bottom_boder">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="sign-in mt-32">
                            <button type="submit">Sign Up</button>
                        </div>
                    </form>
                    <div class="block-footer">
                        <p>Have an account? <a href="/login">Sign In</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-icon register d-flex justify-content-center align-items-center">
            <div class="container">
                <img src="{{ asset('assets/image-new/footer.png') }}" alt="" style="width: 100%">
            </div>
        </div>
    </section>

    <script>
        function toggleBPJSForm(show) {
            const bpjsForm = document.getElementById('bpjsForm');
            if (show) {
                bpjsForm.classList.remove('d-none');
            } else {
                bpjsForm.classList.add('d-none');
            }
        }
    </script>
@endsection
