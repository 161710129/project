<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;

    protected $table= 'categories';
    
    public function produks()
    {
		return $this->belongsToMany('App\Produk', 'produk_category', 'produk_id','category_id');
	}
}
