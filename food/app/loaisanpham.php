<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class loaisanpham extends Model
{
    protected $table = "loaisanpham";

    public function danhmuc(){
    	return $this-> belongsTo('App\danhmuc','id_danhmuc','id');
    }
    public function loaitheosanpham(){
    	return $this-> hasMany('app\sanpham','id_loai','id');
    }
}
