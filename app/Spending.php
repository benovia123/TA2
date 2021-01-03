<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Spending extends Model
{
    protected $table='spending';
    protected $primaryKey='id';
    public $timestamps=false;

    protected $fillable=[
        'id_advertiser',
        'amount',
        'month',
        'year'
    ];

    public function advertiser(){
        return $this->belongsTo('App\Advertiser','id_advertiser','id');
    }
}
