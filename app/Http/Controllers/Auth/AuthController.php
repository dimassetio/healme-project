<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginUserRequest;
use App\Http\Requests\StoreUserRequest;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;

class AuthController extends Controller
{
    /**
     * Display login page
     */
    public function loginView()
    {
        return view('auth.login');
    }

    /**
     * Display register page
     */
    public function registerView()
    {
        return view('auth.register');
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
    public function store(StoreUserRequest $request)
    {
        try {
            //code...
            User::create($request->validated());
            Alert::success(
                'Berhasil',
                'Registrasi user berhasil, silahkan melakukan login!'
            );

            return redirect()->route('auth.login');
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()
                ->back()
                ->withErrors($request->errors());
        }
    }

    public function loginAction(LoginUserRequest $request)
    {
        try {
            $user = User::where('email', $request->validated()['identifier'])
                ->orWhere('phone_number', $request->validated()['identifier'])
                ->first();

            if (
                ($user &&
                    Auth::attempt([
                        'email' => $user->email,
                        'password' => $request->validated()['password'],
                    ])) ||
                Auth::attempt([
                    'phone_number' => $user->phone_number,
                    'password' => $request->validated()['password'],
                ])
            ) {
                $request->session()->regenerate();

                // Setelah login berhasil
                $previousUrl = Session::pull('previous_url');

                if ($previousUrl) {
                    // Arahkan pengguna ke URL tujuan sebelumnya
                    Alert::success('Login Berhasil', 'success');
                    return redirect()->to($previousUrl);
                } else {
                    // Jika tidak ada URL tujuan sebelumnya, arahkan pengguna ke halaman home
                    Alert::toast('Login Berhasil', 'success');
                    return redirect()->route('app.home');
                }
            } else {
                return redirect()
                    ->back()
                    ->with([
                        'kredensial' => 'kredensial tidak ditemukan di sistem!',
                    ]);
            }
        } catch (\Throwable $th) {
            //throw $th;
            dd($th);
        }
    }

    public function logoutAction()
    {
        Auth::logout();

        Alert::toast('Logout Berhasil', 'success');
        return redirect()->route('app.home');
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
