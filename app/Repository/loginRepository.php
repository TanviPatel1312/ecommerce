<?php

namespace App\Repositories;

use App\Interfaces\loginInterface;
use App\Models\User;
use PHPUnit\Util\Test;

class todoRepository implements loginInterface
{
    public function all()
    {
        return User::get();
    }

    public function get($id)
    {
        return todo::find($id);
    }

    public function store(array $data)
    {
        return todo::create($data);
    }

    public function update($id, array $data)
    {
        return todo::find($id)->update($data);
    }

    public function delete($id): int
    {
        return todo::destroy($id);
    }

    public function getData()
    {
        return todo::latest()->simplePaginate(4);
    }
}
