<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    public function convenient()
    {
        return $this->belongsTo(Environment::class);
    }

    public function description()
    {
        return $this->hasOne(ItemDescription::class);
    }

    public function picture()
    {
        return $this->hasOne(ItemPicture::class);
    }
}
