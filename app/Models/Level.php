<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    protected $fillable = ['name'];

    public function sub_levels()
    {
        return $this->hasMany(SubLevel::class);
    }

    public function books()
    {
        return $this->hasManyThrough(Book::class, SubLevel::class);
    }
}
