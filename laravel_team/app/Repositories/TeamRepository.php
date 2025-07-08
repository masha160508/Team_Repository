<?php
 namespace App\Repositories;
 use App\Models\Book;
 use App\Repositories\Interfaces\TeamRepositoryInterfaces;
class TeamRepository implements TeamRepositoryInterfaces{

    public function all()
    {
        return Book::all();
    }
    public function search(string $title){
        return Book::query()->where('title', 'LIKE', "%{$title}%")->get();
    }

}
