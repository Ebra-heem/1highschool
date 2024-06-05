<?php

namespace App\Repositories\Contracts;

use App\Models\School;

interface SchoolRepositoryInterface
{
    public function all();

    public function find($id);

    public function create(array $data);

    public function update(School $school, array $data);

    public function delete(School $school);
}
