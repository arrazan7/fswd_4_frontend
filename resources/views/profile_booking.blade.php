@extends('layouts.public')

@section('title', 'List Booking')

@section('content')
    @if (session('alert'))
        <script>
            alert("{{ session('alert') }}");
        </script>
    @endif
    <div class="max-w-[1100px] mx-auto mt-24 grid grid-cols-12 gap-5">
        <div class="col-span-3 flex flex-col items-center rounded-lg shadow-lg h-fit">
            <img src="http://127.0.0.1:8000/storage/profile/{{ $profile['photo'] }}"
                class="w-40 h-40 object-cover object-center rounded-full my-10" />
            <p class="text-lg font-semibold text-slate-800 text-center whitespace-nowrap w-52 overflow-hidden text-ellipsis">
                {{ $profile['fullname'] }}
            </p>
            <div class="flex flex-col w-full py-9">
                <a href="{{ route('profile') }}"
                    class="px-7 py-2 text-sm border-l-4 text-slate-800 border-transparent">Pengaturan Profile</a>
                <a href="{{ route('profile_booking') }}"
                    class="px-7 py-2 text-sm border-l-4 text-purple-500 border-purple-500">Pemesanan Saya</a>
            </div>
            <a href="{{ route('logout') }}" class="text-lg text-white font-semibold bg-red-600 rounded-lg py-2 px-3 mb-10">
                Logout
            </a>
        </div>
        <div class="col-span-9 rounded-lg shadow-lg h-fit flex flex-col p-8">
            <table class="table-auto border-collapse border border-slate-500">
                <thead>
                    <tr>
                        <th class="border border-slate-600 bg-purple-500 text-white">
                            No
                        </th>
                        <th class="border border-slate-600 bg-purple-500 text-white">
                            Paket Travel
                        </th>
                        <th class="border border-slate-600 bg-purple-500 text-white">
                            Tanggal Keberangkatan
                        </th>
                        <th class="border border-slate-600 bg-purple-500 text-white">
                            Jumlah Tiket
                        </th>
                        <th class="border border-slate-600 bg-purple-500 text-white">
                            Harga Total
                        </th>
                        <th class="border border-slate-600 bg-purple-500 text-white">
                            Aksi
                        </th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    @forelse ($booking as $json)
                        <tr>
                            <td class="border border-slate-700">{{ $loop->iteration }}</td>
                            <td class="border border-slate-700">
                                {{ $json['travel_name'] }}
                            </td>
                            <td class="border border-slate-700">
                                {{ $json['date'] }}
                            </td>
                            <td class="border border-slate-700">{{ $json['ticket'] }}</td>
                            <td class="border border-slate-700">Rp<?php echo number_format($json['price'], 0, ',', '.'); ?></td>
                            <td class="border border-slate-700">
                                <div class="flex justify-center items-center">
                                    <a href="{{ route('destroy_booking', ['id' => $json['id']]) }}"
                                        title="Batalkan Pemesanan">
                                        <i class="fa-solid fa-circle-xmark" style="color: #ff0000"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr class="text-base text-center text-red-600">
                            <td colspan="6">Data tidak ditemukan</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/1fe05764da.js" crossorigin="anonymous"></script>
@endsection
