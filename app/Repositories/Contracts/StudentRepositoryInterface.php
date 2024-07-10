<?php
namespace App\Repositories\Contracts;

use App\Models\Student;

interface StudentRepositoryInterface
{
    public function all();
    public function create(array $data);
    public function update(Student $student, array $data);
    public function delete(Student $student);
    public function find($id);
}
