<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $fillable = ['title', 'text', 'image', 'text_position','status','image2','image3','image4'];
    public $timestamps = false;
}
