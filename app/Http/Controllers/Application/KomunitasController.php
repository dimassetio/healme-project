<?php

namespace App\Http\Controllers\Application;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KomunitasController extends Controller
{
    public function komunitasHomeView()
    {
        return view('app.feature.komunitas.komunitas-view-1');
    }

    public function komunitasOptions()
    {
        return view('app.feature.komunitas.komunitas-view-2');
    }
}
