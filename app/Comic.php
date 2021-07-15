<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    protected $table = "fumetti";
    protected $fillable = ['name', 'price', 'image', 'description', 'available'];
}
