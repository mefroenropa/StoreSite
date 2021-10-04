<?php

namespace App;


use System\Database\ORM\Model;
use System\Database\Traits\HasSoftDelete;

class View extends Model
{

    use HasSoftDelete;

    protected $table = "views";
    protected $fillable = ['product_id', 'user_id', 'view_count', 'ip_address', 'page_lists'];
    protected $deletedAt = 'deleted_at';

    public function user(){
        return $this->belongsTo('\App\User', 'user_id', 'id');
    }

    public function product(){
        return $this->belongsTo('\App\Product', 'product_id', 'id');
    }

}