<?php

namespace App;


use System\Database\ORM\Model;
use System\Database\Traits\HasSoftDelete;

class Brand extends Model
{

    use HasSoftDelete;

    protected $table = "brands";
    protected $fillable = ['name', 'user_id', 'image'];
    protected $casts = ['image' => 'array'];

    protected $deletedAt = 'deleted_at';

    public function user(){
        return $this->belongsTo('\App\User', 'user_id', 'id');
    }

    public function products(){
        return $this->hasMany("\App\Product", 'brand_id', 'id');
    }


}