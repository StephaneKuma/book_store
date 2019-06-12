<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BookCategory extends Model
{
    protected $fillable = ['name'];

    public function sub_categories()
    {
        return $this->hasMany(BookSubCategory::class);
    }

    public function books()
    {
        return $this->hasManyThrough(Book::class, BookSubCategory::class);
    }
}
