<?php

namespace App\Http\Controllers;

use App\Advertiser;
use App\Spending;
use Illuminate\Http\Request;

class SpendingController extends Controller
{
    public function index()
    {
        $spendings=Spending::with('advertiser')->get(); 
        return view('spending', compact('spendings'));
    }

    public function addForm()
    {
        $advertisers=Advertiser::all();
        return view('spending_add', compact('advertisers'));
    }

    public function add(Request $request)
    {
        Spending::insert($request->except('_token'));
        return redirect ('/spending');
    }

    public function delete($id)
    {
        Spending::destroy($id);
        return redirect()->back();
    }

    public function editForm($id)
    {
        $spending=Spending::find($id);
        $advertisers=Advertiser::all();
        return view('spending_edit', compact(['spending', 'advertisers']));
    }

    public function edit($id, Request $request)
    {
        Spending::where('id', $id)->update($request->except('_token'));
        return redirect('/spending');
    }
}


