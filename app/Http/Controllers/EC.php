<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EC extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $post = Post::all();
        dd($post);
        return view('employees.show');
    }

    public function show(Product $product) {
        return view('employees.show', ['product' =>  $product]);
    }
    
    public function create() {
        return view('employees.create');
    }

    public function edit(Product $product) {
        return view('employees.edit');
    }

    public function update(Request $request, Product $product) {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required'
        ]);
        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->save();
        return redirect()->route('employees.index');
    }

    public function store(Request $request) {
        $data = $request->validate([
            'id' => 'required',
            'name' => 'required',
            'salary' => 'required',
            
        ]);

        es::create($data);

        return view('home');
    }

    public function destroy(Product $product) {
        $product->delete();
        return back();
    }
}
