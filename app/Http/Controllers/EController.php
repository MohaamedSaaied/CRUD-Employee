<?php

namespace App\Http\Controllers;

use App\Models\e;
use Illuminate\Http\Request;

class EController extends Controller
{


    public function home(){
        return view('employees.home');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $e=DB::select('select * from es where active = ?', [1]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employees.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);
        emp::create('$data');
        return redirect()->route('employees.home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\e  $e
     * @return \Illuminate\Http\Response
     */
    public function show(e $e)
    {
        return view('employees.show',compact('emp'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\e  $e
     * @return \Illuminate\Http\Response
     */
    public function edit(e $e)
    {
        return view('employees.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\e  $e
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, e $e)
    {
        $request->validate([
            'name'=>'required'
        ]);
        $emp->name=$request->name;
        $emp->save();
        return redirect()->route('employees.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\e  $e
     * @return \Illuminate\Http\Response
     */
    public function destroy(e $e)
    {
        $emp->delete();
        return back();
    }
}
