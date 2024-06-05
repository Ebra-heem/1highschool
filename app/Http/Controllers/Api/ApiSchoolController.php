<?php

namespace App\Http\Controllers\Api;

use App\Repositories\Contracts\SchoolRepositoryInterface;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
        return response()->json($this->schoolRepository->all());
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

        $data['logo'] = $request->file('logo')->store('public/assets/images');

        $school = $this->schoolRepository->create($data);

        return response()->json($school, 201);
    }

    public function show($id)
    {
        $school = $this->schoolRepository->find($id);
        return response()->json($school);
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
            $data['logo'] = $request->file('logo')->store('public/assets/images');
        }

        $school = $this->schoolRepository->update($school, $data);

        return response()->json($school);
    }

    public function destroy($id)
    {
        $school = $this->schoolRepository->find($id);
        $this->schoolRepository->delete($school);

        return response()->json(null, 204);
    }
}
