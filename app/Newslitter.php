<?php

namespace App;


use System\Database\ORM\Model;
use System\Database\Traits\HasSoftDelete;

class Newslitter extends Model
{

    use HasSoftDelete;

    protected $table = "newsletters";
    protected $fillable = ['email'];
    protected $deletedAt = 'deleted_at';


}