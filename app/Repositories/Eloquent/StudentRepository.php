<?php

namespace App\Repositories\Eloquent;

use App\Models\Student;
use Illuminate\Support\Facades\Storage;
use App\Repositories\Contracts\StudentRepositoryInterface;

class StudentRepository implements StudentRepositoryInterface
{
    public function all()
    {
        if (auth()->user()->school_id) {
            return Student::where('school_id', auth()->user()->school_id)->get();
        }
        return Student::all();
    }

    public function create(array $data)
    {

        return Student::create($data);
    }

    public function update(Student $student, array $data)
    {
        if (isset($data['student_image'])) {
            if ($student->student_image) {
                Storage::delete($student->student_image);
            }
            $data['student_image'] = $this->uploadImage($data['student_image']);
        }
        return $student->update($data);
    }

    public function delete(Student $student)
    {
        if ($student->student_image) {
            Storage::delete($student->student_image);
        }
        return $student->delete();
    }

    public function find($id)
    {
        return Student::find($id);
    }

    private function uploadImage($image)
    {
        return $image->store('student_images', 'public');
    }
}
