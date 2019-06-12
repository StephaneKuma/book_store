<?php
/**
 * Created by PhpStorm.
 * User: Stekos
 * Date: 11/06/2019
 * Time: 13:17
 */

namespace App\Repositories;


interface ResourceInterface
{
    public function getAll();
    public function getPaginated(int $nbr_per_page);
    public function store(array $validated);
    public function getById(int $id);
    public function update(int $id, array $validated);
    public function destroy(int $id);
}
