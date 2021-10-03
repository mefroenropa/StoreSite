<?php

namespace App;


use System\Database\ORM\Model;
use System\Database\Traits\HasSoftDelete;

class Gallery extends Model
{

    use HasSoftDelete;

    protected $table = "galleries";
    protected $fillable = ['image', 'product_id', 'user_id', 'isFirst'];
    protected $casts = ['imgae' => 'array'];

    protected $deletedAt = 'deleted_at';

    public function product(){
        return $this->belongsTo("\App\Product", 'product_id', 'id');
    }



}