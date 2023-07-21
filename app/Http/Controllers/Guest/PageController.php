<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home() {
        $trains = Train::all();
        return view('guest.home', compact('trains'));
    }
}
