<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['nilai1'];
    public $timestamps = false;
    // protected $guarded = [];
}
