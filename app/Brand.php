<?php

namespace App;


use System\Database\ORM\Model;
use System\Database\Traits\HasSoftDelete;

class Brand extends Model
{

    use HasSoftDelete;

    protected $table = "brands";
    protected $fillable = ['name', 'user_id', 'parent_id'];
    protected $deletedAt = 'deleted_at';



}