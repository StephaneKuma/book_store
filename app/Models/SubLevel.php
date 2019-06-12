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

    public function categories()
    {
        return $this->hasMany(BookCategory::class);
    }

    public function sub_categories()
    {
        return $this->hasManyThrough(BookSubCategory::class, BookCategory::class);
    }
}
