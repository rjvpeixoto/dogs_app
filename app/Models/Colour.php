<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Colour extends Model
{
    protected $fillable = [
        'id',
        'colour',
    ];


    public function dogs (){
        return $this->hasMany(Colour::class);
    }
}
