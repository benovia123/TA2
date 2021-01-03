<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Food;

class FoodController extends Controller
{
	public function index()
    {
		$food = Food::all();
    	return view('food', ['food' => $food]);
	}

	public function tambah()
    {
    	return view('food_tambah');
    }


    public function proses(Request $request)
    {
    	$this->validate($request,[
    		'year' => 'required',
    		'month' => 'required',
    		'section' => 'required',
    		'category' => 'required',
    		'advertiser' => 'required',
    		'mothercorp' => 'required',
    		'product' => 'required',
    		'tv' => 'required',
    		'press' => 'required',
    		'magazine' => 'required',
    		'total' => 'required'
    	]);
 
        Food::create([
    		'year' => $request->year,
    		'month' => $request->month,
    		'section' => $request->section,
    		'category' => $request->category,
    		'advertiser' => $request->advertiser,
    		'mothercorp' => $request->mothercorp,
    		'product' => $request->product,
    		'tv' => $request->tv,
    		'press' => $request->press,
    		'magazine' => $request->magazine,
    		'total' => $request->total
    	]);
 
    	return redirect('/food');
    }


    public function edit($id){
	   $food = Food::find($id);
	   return view('food_edit', ['food' => $food]);
	}


	public function update($id, Request $request){
	    $this->validate($request,[
		   	'year' => 'required',
    		'month' => 'required',
    		'section' => 'required',
    		'category' => 'required',
    		'advertiser' => 'required',
    		'mothercorp' => 'required',
    		'product' => 'required',
    		'tv' => 'required',
    		'press' => 'required',
    		'magazine' => 'required',
    		'total' => 'required'
	    ]);

	    $food = Food::find($id);
	    $food->year = $request->year;
	    $food->month = $request->month;
	    $food->section = $request->section;
	    $food->category = $request->category;
	    $food->advertiser = $request->advertiser;
	    $food->mothercorp = $request->mothercorp;
	    $food->product = $request->product;
	    $food->tv = $request->tv;
	    $food->press = $request->press;
	    $food->magazine = $request->magazine;
	    $food->total = $request->total;

	    $food->save();
	    return redirect('/food');
	}

	public function delete($id){
	    $food = Food::find($id);
	    $food->delete();
	    return redirect('/food');
	}

}
