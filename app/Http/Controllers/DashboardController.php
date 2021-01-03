<?php

namespace App\Http\Controllers;

use App\Advertiser;
use App\Spending;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
         $advertisers = new Advertiser();
         $sections=$advertisers->getSections();
         $categories=$advertisers->getCategories();
         $mothercorps=$advertisers->getMothercorps();
         $products=$advertisers->getProducts();
         return view('dashboard', compact('sections','categories','mothercorps','products'));
    }

    public function roundNum($num)
    {
        return round($num/1000, PHP_ROUND_HALF_UP);
    }

    public function toptwenty($year = null)
    {
        if ($year == null) {
            $toptwenty = Spending::with('advertiser')
                    ->select('id_advertiser', DB::raw('sum(amount) as total'))
                    ->groupBy('id_advertiser')
                    ->orderBy('total','DESC')
                    ->limit((20))
                    ->get();
        } else {
            $toptwenty = Spending::with('advertiser')
                ->select('id_advertiser', DB::raw('sum(amount) as total'))
                ->where('year', $year)
                ->groupBy('id_advertiser')
                ->orderBy('total','DESC')
                ->limit((20))
                ->get();
        }
        
        $chartData = [
            ['Advertiser', 'Spending']
        ];
        
        foreach ($toptwenty as $top) {
            $chartData[] = [$top->advertiser->customer, $this->roundNum($top->total)];
        }

        return response()->json(['data' => $chartData]);
    }
}
