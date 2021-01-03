<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    protected $table = "rawdata";

    protected $fillable = [
    		'year',
    		'month' ,
    		'section' ,
    		'category' ,
    		'advertiser' ,
    		'mothercorp' ,
    		'product' ,
    		'tv' ,
    		'press' ,
    		'magazine' ,
    		'total'
    	];
}
