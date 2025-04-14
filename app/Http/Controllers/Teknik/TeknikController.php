<?php

namespace App\Http\Controllers\Teknik;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TeknikController extends Controller
{
    public function index() {
        return view('teknik/dashboard');
    }
}
