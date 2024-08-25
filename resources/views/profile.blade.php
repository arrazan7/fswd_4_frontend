@extends('layouts.public')

@section('title', 'Profile')

@section('content')
    <div class="max-w-[1100px] mx-auto mt-24 grid grid-cols-12 gap-5">
        <div class="col-span-3 flex flex-col items-center rounded-lg shadow-lg h-fit">
            <div class="relative my-10">
                <img src="http://127.0.0.1:8000/storage/profile/{{ $profile['photo'] }}"
                    class="w-40 h-40 object-cover object-center rounded-full" />
                <a href="" class="absolute bottom-0 right-0 w-10 h-10 bg-blue-500 rounded-full" title="Edit Foto">
                    <i class="absolute fa-solid fa-pen text-xl left-1/2 -translate-x-1/2 top-1/2 -translate-y-1/2"
                        style="color: #ffffff;"></i>
                </a>
            </div>
            <p
                class="text-lg font-semibold text-slate-800 text-center whitespace-nowrap w-52 overflow-hidden text-ellipsis">
                {{ $profile['fullname'] }}
            </p>
            <div class="flex flex-col w-full py-9">
                <a href="{{ route('profile') }}"
                    class="px-7 py-2 text-sm border-l-4 text-purple-500 border-purple-500">Pengaturan Profile</a>
                <a href="{{ route('profile_booking') }}"
                    class="px-7 py-2 text-sm border-l-4 text-slate-800 border-transparent">Pemesanan Saya</a>
            </div>
            <a href="{{ route('logout') }}" class="text-lg text-white font-semibold bg-red-600 rounded-lg py-2 px-3 mb-10">
                Logout
            </a>
        </div>
        <div class="col-span-9 rounded-lg shadow-lg h-fit flex flex-col p-8">
            <form action="{{ route('profileupdate', ['id' => $profile['id']]) }}" method="POST">
                @csrf
                <div class="grid grid-cols-2 gap-8 mb-2">
                    <div>
                        <label for="fullname" class="block text-sm text-slate-500">Nama Lengkap:</label>
                        <input type="text" id="fullname" name="fullname" value="{{ $profile['fullname'] }}"
                            class="block mb-4 w-full text-base text-slate-800 focus:outline-none border-b border-slate-500" />
                    </div>
                    <div>
                        <label for="email" class="block text-sm text-slate-500">Email:</label>
                        <input type="email" id="email" name="email" value="{{ $profile['email'] }}"
                            class="block mb-4 w-full text-base text-slate-800 focus:outline-none border-b border-slate-500" />
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-8">
                    <div>
                        <label for="username" class="block text-sm text-slate-500">Username:</label>
                        <input type="text" id="username" name="username" value="{{ $profile['username'] }}"
                            class="block mb-4 w-full text-base text-slate-800 focus:outline-none border-b border-slate-500" />
                    </div>
                    <div>
                        <label for="phone" class="block text-sm text-slate-500">Nomor Telepon:</label>
                        <input type="tel" id="phone" name="phone" value="{{ $profile['phone'] }}"
                            class="block mb-4 w-full text-base text-slate-800 focus:outline-none border-b border-slate-500" />
                    </div>
                </div>
                <div class="text-center mt-5">
                    <input type="submit" value="Simpan Perubahan"
                        class="text-base text-white font-semibold bg-purple-500 rounded-lg py-2 px-5 cursor-pointer" />
                </div>
            </form>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/1fe05764da.js" crossorigin="anonymous"></script>
@endsection
