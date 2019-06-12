<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubLevel extends Model
{
    protected $guarded = [];

    public function level()
    {
        return $this->belongsTo(Level::class);
    }

    public function books()
    {
        return $this->hasMany(Book::class);
    }
}
