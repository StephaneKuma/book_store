<?php
/**
 * Created by PhpStorm.
 * User: Stekos
 * Date: 14/06/2019
 * Time: 00:53
 */

namespace App\Repositories;


use App\User;

class UserRepository extends ResourceRepository
{
    public function __construct(User $user)
    {
        parent::__construct($user);
    }
}
