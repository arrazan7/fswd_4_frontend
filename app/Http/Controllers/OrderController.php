<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class OrderController extends Controller
{
    // This method will show login page
    public function order(String $id_user, String $id_travel)
    {
        return view('order', compact('id_user', 'id_travel'));
    }

    // This method will show register page
    public function confirm(String $id_travel)
    {
        $response = Http::get('http://127.0.0.1:8000/api/show-travel/' .$id_travel. '');

        // Return view with flash message available
        if (!$response -> ok() || $response === null) {
            echo "Kesalahan saat mengambil data dari API";
            exit;
        }
        else {
            $dataTravel = $response['data'];

            $accessToken = session() -> get('access_token'); // Retrieve token from session
            $tanggalOrder = session() -> get('tanggalOrder');
            $tiketOrder = session() -> get('tiketOrder');

            $response = Http::withHeaders([
                'Authorization' => "Bearer {$accessToken}",
            ]) -> get('http://localhost:8000/api/show-user');

            if ($response -> ok()) {
                $profile = $response -> json()['data'];

                return view('confirm', compact('profile', 'dataTravel', 'tanggalOrder', 'tiketOrder'));
            } else {
                // Handle potential token-related errors (e.g., expired token)
                session() -> forget('access_token'); // Clear token on error
                return redirect() -> route('login_page') -> with('error', 'Your session has expired. Please log in again.');
            }
        }
    }

    // This method will show register page
    public function booking(Request $request)
    {
        // Ambil data order dari form
        $userOrder = $request -> user;
        $travelOrder = $request -> travel;
        $tanggalOrder = $request -> tanggal;
        $tiketOrder = $request -> tiket;
        session() -> put('tanggalOrder', $tanggalOrder);
        session() -> put('tiketOrder', $tiketOrder);

        return redirect() -> route('confirm', ['id_travel' => $travelOrder]);
    }

    // This method will show register page
    public function profilebooking()
    {
        return view('profile_booking');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
