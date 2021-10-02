<?php

namespace App;


use System\Database\ORM\Model;
use System\Database\Traits\HasSoftDelete;

class Discount extends Model
{

    use HasSoftDelete;

    protected $table = "discounts";
    protected $fillable = ['user_id', 'product_id', 'value', 'type', 'timeToDate', 'code'];
    protected $deletedAt = 'deleted_at';

    public function user(){
        return $this->belongsTo('\App\User', 'user_id', 'id');
    }

 

}