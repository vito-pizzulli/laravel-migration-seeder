<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home() {
        $trains = Train::whereDate('departure_time', now()->toDateString())->get();
        return view('guest.home', compact('trains'));
    }
}
