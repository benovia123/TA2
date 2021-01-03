<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Advertiser extends Model
{
    protected $table='rawdata';
    protected $primaryKey='id';
    //  public $timestamps=false;
    //  protected $fillable=[
    //     'customer'
    // ];

    public function spending()
    {
        return $this->hasMany('App/Spending','id_advertiser','id');
    }
    public function getSections() {
        $sections = DB::select("SELECT section FROM rawdata GROUP BY section");
        $data = [];
        foreach ($sections as $section) {
            $datum['id'] = $section->section;
            $datum['parent'] = '0.0';
            $datum['name'] = $section->section;
            $data[] = $datum;
        }

        return $data;
     }

     public function getCategories() {
        $categories = DB::select("SELECT section, category FROM rawdata GROUP BY section, category");
        $data = [];
        foreach ($categories as $category) {
            $datum['id'] = $category->section.'|'.$category->category;
            $datum['parent'] = $category->section;
            $datum['name'] = $category->category;
            $data[] = $datum;
        }

        return $data;
     }

     public function getMothercorps() {
        $mothercorps = DB::select("SELECT section, category, mothercorp FROM rawdata where year='2019'
        GROUP BY  section, category, mothercorp");
        $data = [];
        foreach ($mothercorps as $mothercorp) {
            $datum['id'] = $mothercorp->section.'|'.$mothercorp->category.'|'.$mothercorp->mothercorp;
            $datum['parent'] = $mothercorp->section.'|'.$mothercorp->category;
            $datum['name'] = $mothercorp->mothercorp;
            $data[] = $datum;
        }

        return $data;
     }

     public function getProducts() {
        DB::statement("SET sql_mode = '' ");
        $products = DB::select("SELECT section, category, mothercorp, product, total FROM rawdata where year='2019'
         GROUP BY section, category, mothercorp, product" );
        $data = [];
        foreach ($products as $product) {
            $datum['id'] = $product->section.'|'.$product->category.'|'.$product->mothercorp.'|'.$product->product;
            $datum['parent'] = $product->section.'|'.$product->category.'|'.$product->mothercorp;
            $datum['name'] = $product->product;
            $datum['value'] = $product->total;
            $data[] = $datum;
        }

        return $data;
     }

public function getDatum()
{
    DB::statement("SET sql_mode = '' ");
        $products = DB::select("SELECT section, category, mothercorp, product, total FROM rawdata
         GROUP BY section, category, mothercorp, product");
        $data = [];


}

}
