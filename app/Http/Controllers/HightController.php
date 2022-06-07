<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hight;

class HightController extends Controller
{
    public function index(){
        return response()->json(['hights' => Hight::all()]);
    }

    public function show($id){
        return response()->json(['hights' => Hight::findOrFail($id)]);
    }

    public function store (Request $request){
        $hight = Hight::create($request->all());
        return response()->json($hight, 201);
    }

    public function delete($id)
    {
        Hight::findOrFail($id)->delete();

        return response()->json(null, 204);
    }

    public function update(Request $request, $id)
    {
        $hight = Hight::findOrFail($id);

        $hight->update($request->all());

        return response()->json($hight, 200);
    }
}
