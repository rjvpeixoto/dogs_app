<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Origin;

class OriginController extends Controller
{
    public function index(){
        return response()->json(['origins' => Origin::all()]);
    }

    public function show($id){
        return response()->json(['origins' => Origin::findOrFail($id)]);
    }

    public function store (Request $request){
        $origin = Origin::create($request->all());
        return response()->json($origin, 201);
    }

    public function delete($id)
    {
        Origin::findOrFail($id)->delete();

        return response()->json(null, 204);
    }

    public function update(Request $request, $id)
    {
        $origin = Origin::findOrFail($id);

        $origin->update($request->all());

        return response()->json($origin, 200);
    }
}
