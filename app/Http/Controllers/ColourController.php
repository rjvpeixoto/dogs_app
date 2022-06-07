<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Colour;

class ColourController extends Controller
{
    public function index(){
        return response()->json(['colours' => Colour::all()]);
    }

    public function show($id){
        return response()->json(['colours' => Colour::findOrFail($id)]);
    }

    public function store (Request $request){
        $colour = Colour::create($request->all());
        return response()->json($colour, 201);
    }

    public function delete($id)
    {
        Colour::findOrFail($id)->delete();

        return response()->json(null, 204);
    }

    public function update(Request $request, $id)
    {
        $colour = Colour::findOrFail($id);

        $colour->update($request->all());

        return response()->json($colour, 200);
    }
}


