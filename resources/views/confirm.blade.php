@extends('layouts.public')

@section('title', 'Confirmation')

@section('content')
    <div class="max-w-[700px] mx-auto my-32 p-10 border border-purple-500">
        <p class="text-xl text-slate-800 text-center font-semibold mb-10">
            Pernyataan Konfirmasi
        </p>
        <img src="http://127.0.0.1:8000/storage/travel/{{ $dataTravel['photo'] }}"
            class="w-full h-auto object-cover object-center mb-10" />

        <table>
            <tr>
                <td class="text-base text-slate-500">Nama Paket</td>
                <td class="text-base text-slate-800">: {{ $dataTravel['name'] }}</td>
            </tr>
            <tr>
                <td class="text-base text-slate-500">Lokasi Destinasi</td>
                <td class="text-base text-slate-800">: {{ $dataTravel['destination'] }}</td>
            </tr>
            <tr>
                <td class="text-base text-slate-500">Harga Satuan</td>
                <td class="text-base text-slate-800">: Rp<?php echo number_format($dataTravel['price'], 0, ',', '.'); ?></td>
            </tr>
            <tr>
                <td class="text-base text-slate-500">Jam Berangkat</td>
                <td class="text-base text-slate-800">: {{ $dataTravel['departure'] }}</td>
            </tr>
        </table>
        <hr class="bg-purple-500 my-5" />
        <table>
            <tr>
                <td class="text-base text-slate-500">Jumlah Tiket</td>
                <td class="text-base text-slate-800">: {{ $tiketOrder }}</td>
            </tr>
            <tr>
                <td class="text-base text-slate-500">
                    Tanggal Keberangkatan
                </td>
                <td class="text-base text-slate-800">: {{ $tanggalOrder }}</td>
            </tr>
            <tr>
                <td class="text-base text-slate-500">Nama Pemesan</td>
                <td class="text-base text-slate-800">
                    : {{ $profile['fullname'] }}
                </td>
            </tr>
            <tr>
                <td class="text-base text-slate-500">Email Pemesan</td>
                <td class="text-base text-slate-800">
                    : {{ $profile['email'] }}
                </td>
            </tr>
            <tr>
                <td class="text-lg text-slate-500">Total Harga</td>
                <td class="text-lg font-semibold text-green-500">
                    : Rp<?php echo number_format($tiketOrder * $dataTravel['price'], 0, ',', '.'); ?>
                </td>
            </tr>
        </table>
        <div class="text-center mt-5">
            <form action="{{ route('store_booking') }}" method="POST">
                @csrf
                <input type="number" id="user" name="user_id" class="hidden" value="{{ $profile['id'] }}" />
                <input type="number" id="travel" name="travel_id" class="hidden" value="{{ $dataTravel['id'] }}" />
                <input type="date" id="date" name="date" class="hidden" value="{{ $tanggalOrder }}" />
                <input type="number" id="ticket" name="ticket" class="hidden" value="{{ $tiketOrder }}" />
                <button type="submit"
                    class="bg-blue-600 text-lg text-white font-semibold text-center rounded-lg py-2 px-3 my-8">
                    Konfirmasi
                </button>
            </form>
        </div>
    </div>
@endsection
