@extends('layouts.public')

@section('title', 'Create Booking')

@section('content')
    <div class="max-w-[700px] mx-auto mt-32 p-10 border border-purple-500">
        <p class="text-xl text-slate-800 text-center font-semibold mb-10">
            Form Pemesanan Paket Travel
        </p>
        <form action="{{ route('confirm') }}" method="POST">
            @csrf
            <label for="travel" class="hidden">Travel:</label>
            <input type="number" id="travel" name="travel" class="hidden" value="{{ $id_travel }}" readonly />
            <label for="tanggal" class="block text-base text-slate-500">Tanggal Kunjungan:</label>
            <input type="date" id="tanggal" name="tanggal"
                class="block mb-4 w-full py-1 text-base text-slate-800 focus:outline-none border-b border-slate-500" />
            <label for="tiket" class="block text-base text-slate-500">Jumlah Tiket:</label>
            <input type="number" id="tiket" name="tiket"
                class="block mb-10 w-full py-1 text-base text-slate-800 focus:outline-none border-b border-slate-500" />
            <input type="submit" value="Pesan Sekarang"
                class="block mb-5 w-full p-2 text-base font-semibold text-center text-white bg-purple-500 rounded-xl cursor-pointer" />
        </form>
    </div>
@endsection
