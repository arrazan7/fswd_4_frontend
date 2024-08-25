@extends('layouts.auth')

@section('title', 'Login')

@section('img', 'bg_login.jpg')

@section('content')
    <div class="flex justify-between w-9/12 h-4/6 px-6">
        <div class="flex flex-col justify-center w-7/12 h-full pr-20">
            <p class="text-4xl text-yellow-300 font-semibold mb-5">
                Selamat Datang!
            </p>
            <p class="text-lg text-white mb-5">
                Ayo dukung Tourism Goes Digital bareng Atourin sebagai
                bentuk kontribusi dalam meningkatkan inovasi teknologi di
                sektor pariwisata Indonesia.
            </p>
        </div>
        <div class="w-5/12 h-full border rounded-xl shadow-md overflow-hidden">
            <div class="h-full bg-white p-10">
                <p class="text-2xl font-semibold text-center text-slate-800 mb-10">
                    Masuk Akun
                </p>

                @if (Session::has('success'))
                    <p
                        class="text-center text-lg text-green-500 bg-green-200 border border-green-400 rounded-lg py-2 px-3 mb-5 -mt-5">
                        {{ Session::get('success') }}
                    </p>
                @endif

                @if (Session::has('error'))
                    <p
                        class="text-center text-lg text-pink-500 bg-pink-200 border border-pink-400 rounded-lg py-2 px-3 mb-5 -mt-5">
                        {{ Session::get('error') }}
                    </p>
                @endif

                <form action="{{ route('authentication') }}" method="POST">
                    @csrf
                    <label for="username" class="block text-base text-slate-500">Username:</label>
                    <input type="text" id="username" name="username"
                        class="block mb-4 w-full py-1 text-base text-slate-800 focus:outline-none border-b border-slate-500 invalid:text-pink-700" />
                    @error('username')
                        <p class="text-xs text-pink-500 -mt-4">{{ $message }}</p>
                    @enderror
                    <label for="password" class="block text-base text-slate-500">Password:</label>
                    <input type="password" id="password" name="password"
                        class="block mb-10 w-full py-1 text-base text-slate-800 focus:outline-none border-b border-slate-500 invalid:text-pink-700" />
                    @error('password')
                        <p class="text-xs text-pink-500 -mt-10 mb-10">{{ $message }}</p>
                    @enderror
                    <input type="submit" value="Masuk"
                        class="block mb-5 w-full p-2 text-base font-semibold text-center text-white bg-purple-500 rounded-xl cursor-pointer" />
                </form>
                <p class="text-sm text-center text-slate-800">
                    Belum punya akun?
                    <span class="text-purple-500"><a href="{{ route('register_page') }}">Daftar sekarang</a></span>
                </p>
            </div>
        </div>
    </div>
@endsection
