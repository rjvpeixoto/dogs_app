<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Dog extends Model
{
    protected $fillable = ['id', 'dog', 'origins_id', 'hight_id', 'vidas_id', 'colour_id'];

}
