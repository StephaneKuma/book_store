<?php
/**
 * Created by PhpStorm.
 * User: Stekos
 * Date: 11/06/2019
 * Time: 13:54
 */

namespace App\Repositories;


use App\Models\BookCategory;

class BookCategoryRepository extends ResourceRepository
{
    public function __construct(BookCategory $category)
    {
        parent::__construct($category);
    }
}
