<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Advertiser;

class AdvertiserController extends Controller
{
    public function index()
    {
        $customers=Advertiser::all();
        return view('advertiser',compact('customers'));
    }

    public function add (Request $request)
    {
        Advertiser::insert($request->except('_token'));

        return redirect('/advertiser');
    }

    public function delete($id)
    {
        Advertiser::destroy($id);

        return redirect('/advertiser');
    }

    public function editForm($id)
    {
       
        $advertiser=Advertiser::find($id);
        return view('advertiser_edit', compact('advertiser'));
    }

    public function edit($id, Request $request)
    {
        Advertiser::where('id', $id)->update($request->except('_token'));
        return redirect('/advertiser');
    }
}
