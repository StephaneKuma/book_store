<?php
/**
 * Created by PhpStorm.
 * User: Stekos
 * Date: 11/06/2019
 * Time: 13:25
 */

namespace App\Repositories;


use App\Models\Book;

class BookRepository extends ResourceRepository
{
    public function __construct(Book $book)
    {
        parent::__construct($book);
    }
}
