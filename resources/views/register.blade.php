@extends('layouts.auth')

@section('title', 'Register')

@section('img', 'bg_register.jpg')

@section('content')
    <div class="flex justify-between w-9/12 h-5/6 px-6 mt-5">
        <div class="flex flex-col justify-center w-7/12 h-full pr-20">
            <p class="text-4xl text-yellow-300 font-semibold mb-5">
                Berwisata dengan Atourin
            </p>
            <p class="text-lg text-white mb-5">
                Gabung di Atourin dan nikmati semua fitur mudahnya!
            </p>
            <div class="flex flex-col">
                <div class="flex mb-5">
                    <img src="http://127.0.0.1:8000/storage/web/marketplace.png" class="w-20 h-20 mr-5" />
                    <div>
                        <p class="text-base text-white font-semibold">
                            Marketplace Produk Desa Wisata
                        </p>
                        <p class="text-base text-white">
                            Rasakan experience baru dalam berwisata dan
                            kearifan lokal di desa wisata Indonesia.
                        </p>
                    </div>
                </div>
                <div class="flex mb-5">
                    <img src="http://127.0.0.1:8000/storage/web/objek_wisata.png" class="w-20 h-20 mr-5" />
                    <div>
                        <p class="text-base text-white font-semibold">
                            Trip Planner Indonesia Terlengkap
                        </p>
                        <p class="text-base text-white">
                            Ribuan informasi obyek wisata dan ratusan
                            referensi rencana perjalanan untuk kamu.
                        </p>
                    </div>
                </div>
                <div class="flex mb-5">
                    <img src="http://127.0.0.1:8000/storage/web/coin.png" class="w-20 h-20 mr-5" />
                    <div>
                        <p class="text-base text-white font-semibold">
                            Dapatkan Penghasilan Tambahan
                        </p>
                        <p class="text-base text-white">
                            Kontribusi kamu akan diapresiasi melalui
                            akumulasi poin yang bisa ditukarkan.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-5/12 h-full border rounded-xl shadow-md overflow-hidden">
            <div class="h-full bg-white p-10">
                <p class="text-2xl font-semibold text-center text-slate-800 mb-10">
                    Daftar Akun
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
                <form action="{{ route('register_account') }}" method="POST">
                    @csrf
                    <label for="fullname" class="block mb-4">
                        <span class="text-base text-slate-500">Nama Lengkap:</span>
                        <input type="text" id="fullname" name="fullname"
                            class="block w-full text-base text-slate-800 focus:outline-none border-b border-slate-500 invalid:text-pink-700" />
                        @error('fullname')
                            <p class="text-xs text-pink-500">{{ $message }}</p>
                        @enderror
                    </label>
                    <label for="username" class="block mb-4">
                        <span class="text-base text-slate-500">Username:</span>
                        <input type="text" id="username" name="username"
                            class="block w-full text-base text-slate-800 focus:outline-none border-b border-slate-500 invalid:text-pink-700" />
                        @error('username')
                            <p class="text-xs text-pink-500">{{ $message }}</p>
                        @enderror
                    </label>
                    <label for="email" class="block mb-4">
                        <span class="text-base text-slate-500">Email:</span>
                        <input type="email" id="email" name="email"
                            class="block w-full text-base text-slate-800 focus:outline-none border-b border-slate-500 invalid:text-pink-700" />
                        @error('email')
                            <p class="text-xs text-pink-500">{{ $message }}</p>
                        @enderror
                    </label>
                    <label for="password" class="block mb-4">
                        <span class="text-base text-slate-500">Password:</span>
                        <input type="password" id="password" name="password"
                            class="block w-full text-base text-slate-800 focus:outline-none border-b border-slate-500 invalid:text-pink-700" />
                        @error('password')
                            <p class="text-xs text-pink-500">{{ $message }}</p>
                        @enderror
                    </label>
                    <label for="password_confirmation" class="block mb-4">
                        <span class="text-base text-slate-500">Konfirmasi Password:</span>
                        <input type="password" id="password_confirmation" name="password_confirmation"
                            class="block w-full text-base text-slate-800 focus:outline-none border-b border-slate-500 invalid:text-pink-700" />
                        @error('password_confirmation')
                            <p class="text-xs text-pink-500">{{ $message }}</p>
                        @enderror
                    </label>
                    <p class="mb-4 text-sm text-center text-slate-800">
                        Dengan melakukan pendaftaran, saya setuju dengan
                        <span class="text-purple-500"><a href="https://atourin.com/terms" target="_blank">Syarat &
                                Ketentuan</a></span>
                        dan
                        <span class="text-purple-500"><a href="https://atourin.com/privacy" target="_blank">Kebijakan
                                Privasi</a></span>
                        Atourin
                    </p>
                    <input type="submit" value="Daftar"
                        class="block w-full p-2 text-base font-semibold text-center text-white bg-purple-500 rounded-xl cursor-pointer" />
                </form>
            </div>
        </div>
    </div>
@endsection
