<?php

namespace App\Http\Controllers;

use App\Models\Speciality;
use App\Models\Teacher;
use App\Http\Requests\Teacher\StoreRequest;
use App\Http\Requests\Teacher\UpdateRequest;
use Illuminate\Support\Facades\File;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_teacher = Teacher::orderby('created_at','DESC')->get();
        $speciality = Speciality::all();  

        return view('teacher.index')->with(compact('all_teacher','speciality'));   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $speciality= Speciality::all();

        return view('teacher.create')->with(compact('speciality'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        Teacher::create($request->all());

        return redirect()->route('teacher.create')->with('success','create success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $speciality = Speciality::all();
        $teacher = Teacher::findorfail($id);

        return view('teacher.edit')->with(compact('teacher', 'speciality'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, $id)
    {
        $teacher_exists = Teacher::where([
            ['fullname','=', $request->fullname],
            ['speciality_id','=', $request->speciality_id],
            ['teacher_id', '<>', $id]
            ])->first();
        if (!$teacher_exists){
            $teacher = teacher::findOrFail($id);
            $teacher->update($request->all());
            
            return redirect()->route('teacher.index')->with('success','update success');
        } else {
            
            return redirect()->route('teacher.index')->with('exists','exists');
        } 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $teacher = Teacher::findorfail($id);
        $teacher->delete();

        return redirect()->route('teacher.index')->with('success', "delete success");
    }
}
