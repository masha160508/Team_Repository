<?php
namespace App\Repositories;

use App\Models\Category;
use App\Repositories\Interfaces\CategoryRepositoryInterfaces;
use App\Repositories\Interfaces\TeamRepositoryInterfaces;
class CategoryRepository implements CategoryRepositoryInterfaces{

    public function all()
    {
        return Category::all();
    }
    public function search(string $name)
    {
        return Category::query()->where('name', 'LIKE', "%{$name}%")->get();
    }

}
