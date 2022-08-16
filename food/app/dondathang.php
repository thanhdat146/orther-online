<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dondathang extends Model
{
    protected $table = "dondathang";

    public function khachhang(){
    	return $this-> belongsTo('App\khachhang','id_khachhang','id');
    }
    public function chitietdonhang(){
    	return $this-> hasMany('App\chitietdonhang','id_donhang','id');
    }
    public function sanpham(){
    	return $this-> belongsToMany('App\sanpham','id_sp','id');
    }
}
