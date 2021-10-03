<?php

namespace App;


use System\Database\ORM\Model;
use System\Database\Traits\HasSoftDelete;

class Store extends Model
{

    use HasSoftDelete;

    protected $table = "Store";
    protected $fillable = ['product_id', 'user_id', 'firstCount'];
    protected $deletedAt = 'deleted_at';

    public function user(){
        return $this->belongsTo('\App\User', 'user_id', 'id');
    }

    public function product(){
        return $this->belongsTo('\App\Product', 'product_id', 'id');
    }

}