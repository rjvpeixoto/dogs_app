<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Origin extends Model
{
    protected $fillable = [
        'id',
        'origin',
    ];

    public function dogs (){
        return $this->hasMany(Origin::class);
    }
}
