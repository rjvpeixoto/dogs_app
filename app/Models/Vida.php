<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vida extends Model
{
    protected $fillable = [
        'id',
        'esperança_vida',
    ];

    public function dogs (){
        return $this->hasMany(Vida::class);
    }
}
