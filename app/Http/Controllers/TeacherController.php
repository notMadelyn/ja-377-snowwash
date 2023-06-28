<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use App\Models\Day;
use App\Models\Major;
use App\Models\Room;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function teacher($hari)
    {
        $day = Day::where('name', $hari)->first();
        // $dat = Day::get();
        $room = Room::get();
        $major = Major::get();
        $teach = Teacher::where('days_id', $day->id)->with('room')->with('major')->get();
        $teacher = Teacher::get();
        // dd($teacher);
        return view('teacher.index', compact('day','teach','room','major', 'teacher'));
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
        $teach = Teacher::create([
            'name' => $request->name,
            'hour_start' => $request->hour_start,
            'hour_end' => $request->hour_end,
            'subject' => $request->subject,
            'days_id' => $request->days_id,
            'room_id' => $request->room_id,
            'major_id' => $request->major_id
        ]);
        // dd($teach);
        return redirect()->back()->with('status', 'Success')->with('data',$teach);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function show(Teacher $teacher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function edit(Teacher $teacher)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Teacher $teacher)
    {
        // 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teacher $teacher, $id)
    {
        $teach = Teacher::find($id);

        $teach->delete();

        return redirect()->bacK();
    }
}
