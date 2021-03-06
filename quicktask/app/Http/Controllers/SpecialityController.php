<?php

namespace App\Http\Controllers;

use App\Http\Requests\Speciality\StoreRequest;
use App\Http\Requests\Speciality\UpdateRequest;
use App\Models\Speciality;
use Illuminate\Http\Request;

class SpecialityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_speciality = Speciality::orderby('created_at','DESC')->get();

        return view('speciality.index', compact('all_speciality'));
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('speciality.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        Speciality::create($request->all());

        return redirect()->route('speciality.create')->with('success','create success');
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
        $speciality = Speciality::findOrFail($id);

        return view('speciality.edit', compact('speciality'));
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
        $speciality = Speciality::findOrFail($id);
        $speciality->name = $request->name;
        $speciality->update();

        return redirect()->route('speciality.index')->with('success','update success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // T??m ?????n ?????i t?????ng mu???n x??a
        $speciality_id = Speciality::findOrFail($id);
        $speciality_id->delete();

        return redirect()->route('speciality.index')->with('success', "delete success");
    }
}
