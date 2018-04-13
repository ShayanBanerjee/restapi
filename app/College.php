<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class College extends Model
{
    protected $table = 'college';
    public $primarykey = 'id';
    public $timestamp = true;
}
