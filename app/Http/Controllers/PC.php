<?php

namespace App\Http\Controllers;
use App\Models\E;
use Illuminate\Http\Request;


class Pc extends Controller
{
    public function home(){
        return view('employees.home');
    }
    public function create(){
        return view('employees.create');
    }
    public function edit($id){
       
        $data=E::find($id);
        return view('edit',['data'=>$data]);
    }
    public function update(Request $request){
        $data=E::find($request->id);
        $data->id=$request->id;
        $data->name=$request->name;
        $data->salary=$request->salary;
        $data->save();
        return redirect('show');
    }

    public function show(){
        $data=E::all();
        return view('employees.show',['employees'=>$data]);
    }  
    public function delete($id){
        $data=E::find($id);
        $data->delete();
        return redirect('/');  
    }
    public function store(Request $request) {
        $data=$request->input();
        $employee=new E;
        $employee->id=$data['id'];
        $employee->name=$data['name'];
        $employee->salary=$data['salary'];
        $employee->save();
        return view('employees.home');
    }




}
