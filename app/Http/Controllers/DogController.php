<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dog;


class DogController extends Controller
{
    public function index(){
        return response()->json(['dogs' => Dog::all()]);
    }

    public function show($id){
        return response()->json(['dogs' => Dog::findOrFail($id)]);
    }

    public function store (Request $request){
        $dog = Dog::create($request->all());
        return response()->json($dog, 201);
    }

    public function delete($id)
    {
        Dog::findOrFail($id)->delete();

        return response()->json(null, 204);
    }

    public function update(Request $request, $id)
    {
        $dog = Dog::findOrFail($id);

        $dog->update($request->all());

        return response()->json($dog, 200);
    }
}
