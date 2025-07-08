<?php
namespace App\Repositories\Interfaces;
 interface TeamRepositoryInterfaces
 {
     public function all();

     public function search(string $title);
 }
