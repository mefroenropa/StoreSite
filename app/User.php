<?php

namespace App;


use System\Database\ORM\Model;
use System\Database\Traits\HasSoftDelete;

class User extends Model
{

    use HasSoftDelete;

    protected $table = "users";
    protected $fillable = ['email', 'first_name', 'last_name', 'avatar', 'status', 'is_active', 'password', 'verify_token', 'user_type', 'remember_token', 'remember_token_expire'];
    protected $deletedAt = 'deleted_at';

    
    public function category(){
        return $this->hasMany('\App\User', 'user_id', 'id');
    }

    public function wishlist(){
        return $this->hasMany("\App\Wishlist", 'user_id', 'id');
    }

    public function carts(){
        return $this->hasMany("\App\Cart", 'user_id', 'id');
    }

    public function boughts(){
        return $this->hasMany("\App\Bought", 'user_id', 'id');
    }

}