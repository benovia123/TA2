<?php

use App\Advertiser;
use App\Spending;
use Illuminate\Database\Seeder;

class spendingseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $advertisers = Advertiser::all();
        $months = ['Januari','Februari','Maret','April','Mei','Juni',
        'Juli','Agustus','September','Oktober','November','Desember'];
        $years = ['2016','2017','2018','2019','2020'];
        $data = [];

        foreach ($advertisers as $advertiser){
            foreach ($years as $year){
                foreach ($months as $month){
                    $data[]=[
                        'month' => $month,
                        'year' => $year,
                        'amount' => mt_rand(0,2000000),
                        'id_advertiser' => $advertiser->id

                    ];
                }
            }
        }

        Spending::insert($data);
        
    }
}
