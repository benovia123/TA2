<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Advertiser;

class visualisasiController extends Controller
{
    public function index()
    {
        $customers=Advertiser::all();
        return view('visualisasi',compact('customers'));
    }

}
