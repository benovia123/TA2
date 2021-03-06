<?php

namespace App\Http\Controllers;

use App\Advertiser;
use App\Spending;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SankeyController extends Controller
{
    public function index()
    {
         $advertisers = new Advertiser();
         $sections=$advertisers->getSections();
         $categories=$advertisers->getCategories();
         $mothercorps=$advertisers->getMothercorps();
         $products=$advertisers->getProducts();
         return view('sankey', compact('sections','categories','mothercorps','products'));
    }

}
