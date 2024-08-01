<?php

namespace App\Http\Controllers\Application;

use App\Models\Psikolog;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function homeView()
    {
        $doctors = Psikolog::all();
        return view('app.feature.home.homePage', compact('doctors'));
    }
}
