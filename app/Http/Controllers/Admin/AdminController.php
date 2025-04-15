<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {
        return view('admin/dashboard');
    }

    public function home() {
        return view('admin/home');
    }
    public function fasilitas() {
        return view('admin/fasilitas');
    }
    public function gedung() {
        return view('admin/gedung');
    }
    public function lantai() {
        return view('admin/lantai');
    }
    public function addservices() {
        return view('admin/addservices');
    }
    public function overtime() {
        return view('admin/overtime');
    }
    public function ruangan() {
        return view('admin/ruangan');
    }
    public function billing() {
        return view('admin/billing');
    }
    public function penalti() {
        return view('admin/penalti');
    }
    public function denda() {
        return view('admin/denda');
    }
    public function tariflistrik() {
        return view('admin/tariflistrik');
    }
    public function rekening() {
        return view('admin/rekening');
    }
    public function pajak() {
        return view('admin/pajak');
    }
    public function materai() {
        return view('admin/materai');
    }
}
