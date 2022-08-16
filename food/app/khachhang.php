<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class khachhang extends Model
{
    protected $table = "khachhang";

    public function dondathang(){
    	return $this-> hasMany('App\dondathang','id_khachhang','id');
    }
}
