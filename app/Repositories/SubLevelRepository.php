<?php
/**
 * Created by PhpStorm.
 * User: Stekos
 * Date: 13/06/2019
 * Time: 14:06
 */

namespace App\Repositories;


use App\Models\SubLevel;

class SubLevelRepository extends ResourceRepository
{
    public function __construct(SubLevel $subLevel)
    {
        parent::__construct($subLevel);
    }

    public function getByName(string $name)
    {
        return SubLevel::where('name', $name)->get();
    }
}
