<?php

namespace App\Repositories\Eloquent;

use App\Models\School;
use App\Repositories\Contracts\SchoolRepositoryInterface;

class SchoolRepository implements SchoolRepositoryInterface
{
    public function all()
    {
        return School::all();
    }

    public function find($id)
    {
        return School::find($id);
    }

    public function create(array $data)
    {
        return School::create($data);
    }

    public function update(School $school, array $data)
    {
        $school->update($data);
        return $school;
    }

    public function delete(School $school)
    {
        $school->delete();
    }
}
