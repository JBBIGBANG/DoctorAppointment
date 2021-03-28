<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\DoctorAppoinment;
use Illuminate\Http\Request;
use DB;
class DoctorAppoinmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('AppoinmentShow');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('DoctorAppoinmentForm');


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $res = new DoctorAppoinment;
        $res->name = $request-> input('name');
        $res->date = $request-> input('date');
        $res->time = $request-> input('time');
        $res->nid = $request-> input('nid');
        $res->mobile_no = $request-> input('mobile_no');


        //$ sign gula db er field name r input gula holo form er input field er nam

        $res->save();
        return redirect('AppoinmentShow');
    }

    // public function show()
    // {
    //     return view('AppointmentShow');
    // }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DoctorAppoinment  $doctorAppoinment
     * @return \Illuminate\Http\Response
     */
    public function show(DoctorAppoinment $doctorAppoinment)
    {

        return view ('AppoinmentShow')->with('doctorAppoinmentArr',DoctorAppoinment::all());

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DoctorAppoinment  $doctorAppoinment
     * @return \Illuminate\Http\Response
     */
    public function edit(DoctorAppoinment $doctorAppoinment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DoctorAppoinment  $doctorAppoinment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DoctorAppoinment $doctorAppoinment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DoctorAppoinment  $doctorAppoinment
     * @return \Illuminate\Http\Response
     */
    public function destroy(DoctorAppoinment $doctorAppoinment)
    {
        //
    }
    // public function show()
    // {
    //     return view('DoctorAppoinmentForm');
    // }
}
