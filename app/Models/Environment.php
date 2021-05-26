<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Environment extends Model
{
    use HasFactory;


    public function building()
    {
        return $this->belongsTo(Building::class);
    }

    public function items(){
        return $this->hasMany(Item::class);
    }

    public function group()
    {
        return $this->hasOne(EnvironmentGroup::class);
    }
}
