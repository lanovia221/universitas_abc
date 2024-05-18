<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// app/Http/Controllers/HomeController.php
namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $dosens = Dosen::all();
        return view('welcome', compact('dosens'));
    }
}

