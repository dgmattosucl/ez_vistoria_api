<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EnvironmentGroup extends Model
{
    use HasFactory;


    public function environments(){
        return $this->hasMany(Environment::class);
    }
}
