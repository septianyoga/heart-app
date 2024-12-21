<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginStoreRequest;
use App\Http\Requests\RegisterStoreRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('auth.login', [
            'title' => 'Login',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('auth.register', [
            'title' => 'Register',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RegisterStoreRequest $request)
    {
        //
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'nik' => $request->nik,
            'no_hp' => $request->no_hp,
            'no_bpjs' => $request->no_bpjs,
            'password' => Hash::make($request->password),
        ]);
        return redirect('/login');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
        //
        Auth::logout();
        return redirect('/login');
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
            'g-recaptcha-response' => 'required',
        ], [
            'g-recaptcha-response.required' => 'Captcha harus diisi.',
            'email.required' => 'Email wajib diisi.',
            'email.email' => 'Email harus memiliki format yang benar.',
            'password.required' => 'Kata sandi wajib diisi.',
            'password.min' => 'Kata sandi harus memiliki minimal :min karakter.',
        ]);

        // Secret key langsung ditulis di sini (hanya contoh, tidak disarankan)
        $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
            'secret' => '6LdlIaIqAAAAABxH0xpi2IBiiEwxMY7y1wuRAlJi',
            'response' => $request->input('g-recaptcha-response'),
        ]);

        $responseBody = json_decode($response->body());
        if (!$responseBody->success) {
            if (isset($responseBody->{'error-codes'})) {
                foreach ($responseBody->{'error-codes'} as $code) {
                    logger("Error Code: $code");
                }
            }
            return back()->withErrors(['g-recaptcha-response' => 'Captcha tidak valid.']);
        }

        // Lanjutkan proses login jika Captcha valid
        $credentials = $request->only('email', 'password');
        if (auth()->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        }

        return back()->withErrors(['email' => 'Email atau password salah.']);

    }


}
