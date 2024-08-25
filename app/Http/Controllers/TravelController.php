<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

use Illuminate\Http\Request;

class TravelController extends Controller
{

    public function filter(Request $request)
    {
        // Mengambil data checkbox lokasi yang dicentang/dipilih
        $lokasi = [];
        for ($i = 1; $i <= 5; $i++) {
            $namaCheckbox = "lokasi" . $i;
            if ($request->input($namaCheckbox)) {
                $lokasi[] = $request->input($namaCheckbox);
            }
        }

        // Mengambil data checkbox durasi yang dicentang/dipilih
        // 1, 2, 3, 4, >4
        $durasi = [];
        for ($i = 1; $i <= 7; $i++) {
            $namaCheckbox = "durasi" . $i;
            if ($request->input($namaCheckbox)) {
                $durasi[] = $request->input($namaCheckbox);
            }
        }

        // Mengambil data checkbox harga yang dicentang/dipilih
        // Rp0 - Rp50.000, Rp50.001 - Rp150.000, Rp150.001 - Rp300.000, Rp300.001 - Rp500.000, Rp500.001 - ...
        $harga = [];
        for ($i = 1; $i <= 5; $i++) {
            $namaCheckbox = "harga" . $i;
            if ($request->input($namaCheckbox)) {
                $harga[] = $request->input($namaCheckbox);
            }
        }

        // Ambil data input dari form
        if (count($request->all()) === 0) {
            $filterData = [
                'lokasi' => [],
                'durasi' => [],
                'harga' => []
            ];
        } else {
            $filterData = [
                'lokasi' => $lokasi,
                'durasi' => $durasi,
                'harga' => $harga
            ];
        }

        session()->put('filterData', $filterData);
        return redirect()->route('home');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $filterData = session()->get('filterData');
        if (!isset($filterData['lokasi'], $filterData['durasi'], $filterData['harga'])) {
            $filterData = [
                'lokasi' => [],
                'durasi' => [],
                'harga' => []
            ];
        }

        // Kirim data ke Laravel API
        $response = Http::post('http://localhost:8000/api/filter-travel', $filterData);

        // Return view with filtered data
        if (!$response->ok() || $response === null) {
            echo "Kesalahan saat mengambil data dari API";
            $filterData = [
                'lokasi' => [],
                'durasi' => [],
                'harga' => []
            ];
            session()->put('filterData', $filterData);
            exit;
        } else {
            $accessToken = session()->get('access_token'); // Retrieve token from session

            $responseProfile = Http::withHeaders([
                'Authorization' => "Bearer {$accessToken}",
            ])->get('http://localhost:8000/api/show-user');

            if ($responseProfile->ok()) {
                // Berhasil mendapat data profile
                $profile = $responseProfile->json()['data'];
                $filter = $response['filter'];
                $data = $response['data'];


                return view('home', compact('profile', 'filter', 'data'));
            } else {
                session()->forget('access_token'); // Clear token from session

                $filter = $response['filter'];
                $data = $response['data'];

                return view('home', compact('filter', 'data'));
            }
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function destroy(string $id)
    {
        //
    }
}
