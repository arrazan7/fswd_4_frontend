<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    // This method will show login page
    public function login()
    {
        return view('login');
    }

    // This method will show register page
    public function register()
    {
        return view('register');
    }

    // This method will show register page
    public function profile()
    {
        $accessToken = session()->get('access_token');

        $responseProfile = Http::withHeaders([
            'Authorization' => "Bearer {$accessToken}",
        ])->get('http://localhost:8000/api/show-user');

        if ($responseProfile->ok()) {
            $profile = $responseProfile->json()['data'];

            if ($profile['role'] == 'admin') {
                // return redirect() -> route('dashboard');
                return view('profile', compact('profile'));
            } elseif ($profile['role'] == 'public') {
                return view('profile', compact('profile'));
            }
        } else {
            session()->forget('access_token'); // Clear token from session
            return redirect()->route('home');
        }
    }

    // This method will authenticate user
    public function authenticate(Request $request)
    {
        // Ambil data register input dari form
        $data = $request->all();

        // Kirim data register ke Laravel API
        $response = Http::post('http://localhost:8000/api/authenticate', $data);

        // Proses respons dari API
        if ($response->ok()) {
            $jsonData = $response->json();
            $accessToken = $jsonData['token'];
            session()->put('access_token', $accessToken);

            $responseProfile = Http::withHeaders([
                'Authorization' => "Bearer {$accessToken}",
            ])->get('http://localhost:8000/api/show-user');

            if ($responseProfile->ok()) {
                $profile = $responseProfile->json()['data'];

                if ($profile['role'] == 'admin') {
                    // return redirect() -> route('dashboard');
                    return redirect()->route('home');
                } elseif ($profile['role'] == 'public') {
                    return redirect()->route('home');
                }
            } else {
                session()->forget('access_token'); // Clear token on error
                return redirect()->back()->with('error', 'Try Again');
            }
        } else {
            // Check for JSON response with validation errors
            $jsonData = $response->json();
            if (isset($jsonData['errors'])) {
                // Pass errors to the Blade view for display
                return redirect()->back()->withErrors($jsonData['errors']);
            } else {
                // Handle other types of errors (e.g., server error)
                return redirect()->back()->with('error', $jsonData['message']);
            }
        }
    }

    public function logout()
    {
        $accessToken = session()->get('access_token');

        // Send logout request with Bearer token in Authorization header
        $response = Http::withHeaders([
            'Authorization' => "Bearer {$accessToken}",
        ])->get('http://localhost:8000/api/logout');

        session()->forget('access_token'); // Clear token from session
        session()->forget('filterData'); // Clear token from session
        return redirect()->route('home'); // Redirect to login page
    }

    public function storeRegister(Request $request)
    {
        // Ambil data register input dari form
        $data = $request->all();

        // Kirim data register ke Laravel API
        $response = Http::post('http://localhost:8000/api/register', $data);

        // Proses respons dari API
        if ($response->created()) {
            return redirect()->route('login_page')->with('success', 'You have registered successfully!');
        } else {
            // Check for JSON response with validation errors
            $jsonData = $response->json();
            if (isset($jsonData['errors'])) {
                // Pass errors to the Blade view for display
                return redirect()->back()->withErrors($jsonData['errors']);
            } else {
                // Handle other types of errors (e.g., server error)
                return redirect()->back()->with('error', 'An error occurred during registration.');
            }
        }
    }

    public function dashboard()
    {
        $accessToken = session()->get('access_token'); // Retrieve token from session

        $response = Http::withHeaders([
            'Authorization' => "Bearer {$accessToken}",
        ])->get('http://localhost:8000/api/profile');

        if ($response->ok()) {
            $profile = $response->json()['data'];
            return view('layouts.dashboard-nav', compact('profile'));
        } else {
            // Handle potential token-related errors (e.g., expired token)
            session()->forget('access_token'); // Clear token on error
            return redirect()->route('login_akun')->with('error', 'Your session has expired. Please log in again.');
        }
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
        $accessToken = session()->get('access_token'); // Retrieve token from session

        $response = Http::withHeaders([
            'Authorization' => "Bearer {$accessToken}",
        ])->get('http://localhost:8000/api/profile');

        // if ($response -> ok()) {
        //     $profile = $response -> json()['data'];
        //     return view('layouts.dashboard-nav', compact('profile'));
        // } else {
        //     // Handle potential token-related errors (e.g., expired token)
        //     session() -> forget('access_token'); // Clear token on error
        //     return redirect() -> route('login_akun') -> with('error', 'Your session has expired. Please log in again.');
        // }
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
        // Ambil data input dari form
        $data = $request->all();

        // Kirim data ke Laravel API
        $response = Http::post('http://localhost:8000/api/update-user/' . $id . '', $data);

        // Proses respons dari API
        if ($response->ok()) {
            // Data berhasil dikirimkan
            session()->flash('alert', 'Profile berhasil diperbarui.');
            return redirect()->route('profile')->with(['success' => 'Data Berhasil Diperbarui!']);
        } else {
            // Terjadi kesalahan saat mengirim data
            session()->flash('alert', 'Profile gagal diperbarui.');
            return redirect()->route('profile')->with(['failed' => 'Data Gagal Diperbarui!']);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
