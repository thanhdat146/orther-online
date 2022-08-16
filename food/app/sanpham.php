<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sanpham extends Model
{
    protected $table = "sanpham";

    public function loaisanpham(){
    	return $this-> belongsTo('App\loaisanpham','id_loai','id');
    }
    public function chitietdonhang(){
    	return $this-> belongsToMany('App\chitietdonhang','id_sp','id');
    }
}
