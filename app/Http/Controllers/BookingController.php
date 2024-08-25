<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $accessToken = session()->get('access_token');

        $responseProfile = Http::withHeaders([
            'Authorization' => "Bearer {$accessToken}",
        ])->get('http://localhost:8000/api/show-user');

        if ($responseProfile->ok()) {
            $profile = $responseProfile->json()['data'];

            $responseBooking = Http::get('http://127.0.0.1:8000/api/show-booking/' . $profile['id'] . '');
            $booking = $responseBooking->json()['data'];

            return view('profile_booking', compact('profile', 'booking'));
        } else {
            session()->forget('access_token'); // Clear token from session
            return redirect()->route('home');
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(String $id_travel)
    {
        $accessToken = session()->get('access_token');
        $responseProfile = Http::withHeaders([
            'Authorization' => "Bearer {$accessToken}",
        ])->get('http://localhost:8000/api/show-user');

        if ($responseProfile->ok()) {
            $profile = $responseProfile->json()['data'];
            return view('create_booking', compact('id_travel', 'profile'));
        } else {
            // Handle potential token-related errors (e.g., expired token)
            session()->forget('access_token'); // Clear token on error
            return redirect()->route('login_page')->with('error', 'Please log in first');
        }
    }

    public function confirm(Request $request)
    {
        $response = Http::get('http://127.0.0.1:8000/api/show-travel/' . $request->travel . '');

        // Return view with flash message available
        if (!$response->ok() || $response === null) {
            echo "Kesalahan saat mengambil data dari API";
            exit;
        } else {
            $dataTravel = $response['data'];

            $accessToken = session()->get('access_token'); // Retrieve token from session
            $tanggalOrder = $request->tanggal;
            $tiketOrder = $request->tiket;

            $response = Http::withHeaders([
                'Authorization' => "Bearer {$accessToken}",
            ])->get('http://localhost:8000/api/show-user');

            if ($response->ok()) {
                $profile = $response->json()['data'];

                return view('confirm', compact('profile', 'dataTravel', 'tanggalOrder', 'tiketOrder'));
            } else {
                // Handle potential token-related errors (e.g., expired token)
                session()->forget('access_token'); // Clear token on error
                return redirect()->route('login_page')->with('error', 'Your session has expired. Please log in again.');
            }
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $accessToken = session()->get('access_token'); // Retrieve token from session

        $responseProfile = Http::withHeaders([
            'Authorization' => "Bearer {$accessToken}",
        ])->get('http://localhost:8000/api/show-user');

        if ($responseProfile->ok()) {
            // Ambil data konfirmasi input dari form
            $data = $request->all();

            // Kirim data booking ke Laravel API
            $responseBooking = Http::post('http://localhost:8000/api/store-booking', $data);

            // Proses respons dari API
            if ($responseBooking->created()) {
                session()->flash('alert', 'Berhasil membuat pesanan');
                return redirect()->route('profile_booking');
            } else {
                // Handle potential token-related errors (e.g., expired token)
                session()->forget('access_token'); // Clear token on error
                return redirect()->route('login_page')->with('error', 'Your session has expired. Please log in again.');
            }
        } else {
            // Handle potential token-related errors (e.g., expired token)
            session()->forget('access_token'); // Clear token on error
            return redirect()->route('login_page')->with('error', 'Your session has expired. Please log in again.');
        }
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
        $accessToken = session()->get('access_token');

        $responseProfile = Http::withHeaders([
            'Authorization' => "Bearer {$accessToken}",
        ])->get('http://localhost:8000/api/show-user');

        if ($responseProfile->ok()) {
            $responseBooking = Http::get('http://127.0.0.1:8000/api/destroy-booking/' . $id . '');

            // Proses respons dari API
            if ($responseBooking->ok()) {
                session()->flash('alert', 'Berhasil membatalkan pesanan');
                return redirect()->route('profile_booking');
            } else {
                session()->flash('alert', 'Gagal membatalkan pesanan!');
                return redirect()->back();
            }
        } else {
            session()->forget('access_token'); // Clear token from session
            return redirect()->route('home');
        }
    }
}
