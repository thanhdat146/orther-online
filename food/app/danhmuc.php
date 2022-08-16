<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class danhmuc extends Model
{
    protected $table = "danhmuc";

    public function loaisanpham(){
    	return $this-> hasMany('app\loaisanpham','id_danhmuc','id');
    }
}
