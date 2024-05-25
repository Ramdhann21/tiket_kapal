<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tiketController extends Controller
{
    function tampil(){
        return view('tiket.tampil');
    }
}
