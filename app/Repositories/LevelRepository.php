<?php
/**
 * Created by PhpStorm.
 * User: Stekos
 * Date: 12/06/2019
 * Time: 00:24
 */

namespace App\Repositories;


use App\Models\Level;

class LevelRepository extends ResourceRepository
{
    public function __construct(Level $level)
    {
        parent::__construct($level);
    }
}
