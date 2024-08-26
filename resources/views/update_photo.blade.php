@extends('layouts.public')

@section('title', 'Update Photo')

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
            <form action="{{ route('update_photo') }}" method="POST" enctype="multipart/form-data" {{-- Saat ada input file foto, jangan lupa tambahkan attribut enctype tersebut!!! --}}>
                @csrf
                <div class="grid grid-cols-1">
                    <div>
                        <label for="photo" class="block text-xl text-slate-500 mb-2">Unggah foto anda:</label>
                        <div class="relative">
                            <input type="file" id="photo" name="photo" class="absolute opacity-0 -z-[1]"
                                onchange="displayFileName()" />
                            <label for="photo"
                                class="inline-block bg-slate-300 w-fit text-base text-slate-800 focus:outline-none border-l border-t border-b border-slate-500 rounded rounded-tr-none rounded-br-none py-2 px-4 cursor-pointer">Choose
                                image</label>
                            <span id="file-name"
                                class="absolute top-1/2 -translate-y-1/2 w-full -ml-[132px] pl-36 text-base italic border border-slate-500 py-2 -z-[1]">No
                                file
                                choose</span>
                        </div>

                        @error('photo')
                            <p class="text-xs text-pink-500 -mt-4">{{ $message }}</p>
                        @enderror
                        <label for="id" class="hidden">pip</label>
                        <input type="number" id="id" name="id" value="{{ $profile['id'] }}" class="hidden"
                            readonly />
                    </div>
                </div>
                <div class="text-center mt-5">
                    <input type="submit" value="Simpan Foto"
                        class="text-base text-white font-semibold bg-purple-500 rounded-lg py-2 px-5 cursor-pointer" />
                </div>
            </form>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/1fe05764da.js" crossorigin="anonymous"></script>
    <script>
        function displayFileName() {
            const fileInput = document.getElementById('photo');
            const fileName = document.getElementById('file-name');
            fileName.textContent = fileInput.files.length > 0 ? fileInput.files[0].name : 'No file chosen';
        }
    </script>
@endsection
