<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vida;

class VidaController extends Controller
{
    public function index(){
        return response()->json(['vidas' => Vida::all()]);
    }

    public function show($id){
        return response()->json(['vidas' => Vida::findOrFail($id)]);
    }

    public function store (Request $request){
        $vida = Vida::create($request->all());
        return response()->json($vida, 201);
    }

    public function delete($id)
    {
        Vida::findOrFail($id)->delete();

        return response()->json(null, 204);
    }

    public function update(Request $request, $id)
    {
        $vida = Vida::findOrFail($id);

        $vida->update($request->all());

        return response()->json($vida, 200);
    }
}
