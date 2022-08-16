<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class anhsanpham extends Model
{
    protected $table = "anhsanpham";

    public function anhsanpham(){
    	return $this-> hasMany('App\anhsanpham','id_sanpham','id');
    }
}
