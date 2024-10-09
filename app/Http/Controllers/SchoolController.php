<?php

namespace App\Http\Controllers;

use App\Repositories\Contracts\SchoolRepositoryInterface;
use Illuminate\Http\Request;
use App\Models\School;

class SchoolController extends Controller
{
    protected $schoolRepository;

    public function __construct(SchoolRepositoryInterface $schoolRepository)
    {
        $this->schoolRepository = $schoolRepository;
    }

    public function index()
    {
        $schools = $this->schoolRepository->all();
        return view('schools.index', compact('schools'));
    }

    public function create()
    {
        return view('schools.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'short_name' => 'required',
            'address' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'code' => 'required',
            'logo' => 'required|image'
        ]);
        if ($request->hasFile('logo')) {
            $data['logo'] = $request->file('logo')->store('public/assets/logos');
        }
        $this->schoolRepository->create($data);

        return redirect()->route('schools.index');
    }

    public function show($id)
    {
        $school = $this->schoolRepository->find($id);
        return view('schools.show', compact('school'));
    }

    public function edit($id)
    {
        $school = $this->schoolRepository->find($id);
        return view('schools.edit', compact('school'));
    }

    public function update(Request $request, $id)
    {
        $school = $this->schoolRepository->find($id);

        $data = $request->validate([
            'name' => 'required',
            'short_name' => 'required',
            'address' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'code' => 'required',
            'logo' => 'nullable|image'
        ]);

        if ($request->hasFile('logo')) {
            $data['logo'] = $request->file('logo')->store('public/assets/logos');
        }

        $this->schoolRepository->update($school, $data);

        return redirect()->route('schools.index');
    }

    public function destroy($id)
    {
        $school = $this->schoolRepository->find($id);
        $this->schoolRepository->delete($school);

        return redirect()->route('schools.index');
    }
}
