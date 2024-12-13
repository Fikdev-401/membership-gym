<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function admin() {
        // ambil data client
        $dataMember = Client::all();

        // ambil data pendaftaran
        $dataPendaftaran = Client::count();

        // ambil data user
        $dataUser = User::count();
        return view('pages.dashboard', compact('dataUser', 'dataPendaftaran', 'dataMember'));
    }
}
