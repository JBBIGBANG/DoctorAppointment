<?php

namespace App\Http\Controllers;

use App\Models\UserForm;
use Illuminate\Http\Request;


class UserFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $res = new UserForm;
        $res -> name = $request->input('name');
        $res -> dob = $request ->input('dob');
        $res -> nid = $request -> input('nid');
         $res -> sex = $request -> input('sex');
         $res -> address = $request -> input('address');
        $res -> mobile = $request -> input('mobile');

        $image = $request->input('file');



        $res -> image = $image;
         $request -> session()->flash('msg', 'Your data submitted successfully');
        $res -> save();
// dd($image);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserForm  $userForm
     * @return \Illuminate\Http\Response
     */
    public function show(UserForm $userForm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserForm  $userForm
     * @return \Illuminate\Http\Response
     */
    public function edit(UserForm $userForm)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UserForm  $userForm
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserForm $userForm)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserForm  $userForm
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserForm $userForm)
    {
        //
    }

    public function view()
    {
        return view('UserPanel/form');
    }

}
