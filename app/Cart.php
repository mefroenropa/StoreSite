<?php

namespace App;


use System\Database\ORM\Model;
use System\Database\Traits\HasSoftDelete;

class Cart extends Model
{

    use HasSoftDelete;

    protected $table = "cart";
    protected $fillable = ['user_id', 'count', 'isPaid', 'product_id'];
    protected $deletedAt = 'deleted_at';

    public function user(){
        return $this->belongsTo('\App\User', 'user_id', 'id');
    }

    public function product(){
        return $this->belongsTo('\App\Product', 'product_id', 'id');
    }

}