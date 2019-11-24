<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Class1 extends Model
{
    public $timestamps=false;
    protected $table="category";
    protected $paimarykey='cate_id';
}
