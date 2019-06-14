<?php
/**
 * Created by PhpStorm.
 * User: Stekos
 * Date: 13/06/2019
 * Time: 18:32
 */

namespace App\Repositories;


use App\Models\BookSubCategory;

class BookSubCategoryRepository extends ResourceRepository
{
    public function __construct(BookSubCategory $subCategory)
    {
        parent::__construct($subCategory);
    }
}
