<?php
namespace App\Repositories\Interfaces;
interface CategoryRepositoryInterfaces
{
    public function all();

    public function search(string $name);
}
