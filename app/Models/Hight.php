<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hight extends Model
{
    protected $fillable = [
        'id',
        'female_interval',
        'male_interval',
    ];

    public function dogs (){
        return $this->hasMany(Hight::class);
    }
}
