<?php

namespace App\Http\Controllers;

use App\Models\School;
use App\Models\Student;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function home()
    {
        $schools = School::all();
        return view('main_home', compact('schools'));
    }
    public function admission()
    {
        $schools = School::all();
        return view('admission', compact('schools'));
    }

    public function application(Request $request)
    {
        // return $request;
        $student = Student::where('birth_certificate', $request->birth_certificate)->first();
        if ($student)
            return view('confirm', compact('student'));
        else
            return redirect()->back()->with('message', "দুঃখিত আপনার আবেদনটি খুঁজে পাওয়া যায় নি! অনুগ্রহ করে জন্ম নিবন্ধন নম্বরটি যাচাই করুন অথবা পুনরায় আবেদন করুন । ");
    }
}
