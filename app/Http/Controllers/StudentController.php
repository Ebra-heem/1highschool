<?php

namespace App\Http\Controllers;

use App\Models\School;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Repositories\Contracts\StudentRepositoryInterface;

class StudentController extends Controller
{
    protected $studentRepository;

    public function __construct(StudentRepositoryInterface $studentRepository)
    {
        $this->studentRepository = $studentRepository;
    }

    public function index()
    {
        $students = $this->studentRepository->all();

        return view('students.index', compact('students'));
    }

    public function create()
    {
        $schools = School::all();
        return view('students.create', compact('schools'));
    }

    public function store(Request $request)
    {

        $data = [];
        $request->validate([
            'student_name_english' => 'required|string|max:255',
            'student_name_bangla' => 'required|string|max:255',
            'birth_certificate' => 'required|string|max:255',
            'mobile_number' => 'required|string|max:255',
            'student_image' => 'required|image|max:2000',
            'class' => 'required',
            'academic_year' => 'required',
            'school_id' => 'required',

            // Add validation rules for all other fields
        ]);
        $data = $request->all();
        if ($request->hasFile('student_image')) {
            $data['student_image'] = $request->file('student_image')->store('public/assets/studentImg');
        }

        $data['admission_id'] = $this->generateId($request->school_id);
        $data['admission_status'] = 'pending';
        //  return $data;
        //  return gettype($data);
        $student = $this->studentRepository->create($data);
        // if(auth()->user()->id)
        // {
        //     return redirect()->back()->with('success', 'Student created successfully.');
        // }        
        return view('confirm', compact('student'));
    }
    public function save(Request $request)
    {
        // return "I am from Save";
        $data = [];
        $request->validate([
            'student_name_english' => 'required|string|max:255',
            'student_name_bangla' => 'required|string|max:255',
            'birth_certificate' => 'required|string|max:255',
            'mobile_number' => 'required|string|max:255',

            'class' => 'required',
            'academic_year' => 'required',
            'school_id' => 'required',

            // Add validation rules for all other fields
        ]);
        $data = $request->all();
        if ($request->hasFile('student_image')) {
            $data['student_image'] = $request->file('student_image')->store('public/assets/studentImg');
        } else {
            $data['student_image'] = 'public/assets/studentImg/avater.jpg';
        }

        $data['admission_id'] = $this->generateId($request->school_id);
        $data['admission_status'] = 'pending';
        //  return $data;
        //  return gettype($data);
        $student = $this->studentRepository->create($data);
        // if(auth()->user()->id)
        // {
        //     return redirect()->back()->with('success', 'Student created successfully.');
        // }        
        return view('confirm', compact('student'));
    }


    public function show($id)
    {
        $student = $this->studentRepository->find($id);
        return view('students.show', compact('student'));
    }

    public function print($id)
    {
        $student = $this->studentRepository->find($id);
        return view('students.print', compact('student'));
    }
    public function approve($id)
    {
        $student = $this->studentRepository->find($id);
        $student->update(['admission_status' => 'Approved']);
        return redirect()->back();
    }
    public function approve_list()
    {
        $students = $this->studentRepository->all()->where('admission_status', 'Approved');

        return view('students.index', compact('students'));
    }

    public function edit($id)
    {
        $student = $this->studentRepository->find($id);
        return view('students.edit', compact('student'));
    }

    public function update(Request $request, $id)
    {
        // return 'update';
        $validatedData = $request->validate([
            'student_name_english' => 'required|string|max:255',
            // Add validation rules for all other fields
        ]);

        $student = $this->studentRepository->find($id);
        $this->studentRepository->update($student, $validatedData);

        return redirect()->route('students.index')->with('success', 'Student updated successfully.');
    }

    public function destroy($id)
    {
        $student = $this->studentRepository->find($id);
        $this->studentRepository->delete($student);

        return redirect()->route('students.index')->with('success', 'Student deleted successfully.');
    }
    private function generateId($id)
    {
        $school = School::find($id);
        $lastId = Student::where('school_id', $school->id)->latest()->first();
        if (!$lastId) {
            $admission_id = $school->short_name . '-' . $school->code . '-' . date("Y") . '-' . 1;
        } else {
            $admission_id = $school->short_name . '-' . $school->code . '-' . date("Y") . '-' . $lastId->id + 1;
        }

        return $admission_id;
    }
}
