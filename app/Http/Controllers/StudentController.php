<?php

namespace App\Http\Controllers;

use App\Models\Major;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student = Student::all();
        $major  = Major::get();
        // dd($);
        return view('student.index', compact('student', 'major'));
    }

    /** 
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $stud = Student::create([
            'name' => $request->name,
            'merk_motor' => $request->merk_motor,
            'plat_nomor' => $request->plat_nomor
            
        ]);
        // dd($stud);
        return redirect()->back()->with('status', 'success')->with('data', $stud);
    }

    public function edit(Request $request,$id)
    {
        // dd($request->all());
        $stud = Student::find($id)->update([
            'name' => $request->name,
            'merk_motor' => $request->merk_motor,
            'plat_nomor' => $request->plat_nomor
            
        ]);
        // dd($stud);
        return redirect()->back()->with('status', 'success')->with('data', $stud);
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
   

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student, $id)
    {
        $student = Student::find($id);
        $student->delete();
        // dd($visitor);
        return redirect()->back();
    }
}
