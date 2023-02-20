<?php

namespace App\Http\Controllers;

use App\Models\Ingredient;
use Illuminate\Http\Request;

class SkladnikController extends Controller
{

    public function index()
    {
        //return Ingredient::all();
        $ingredients = Ingredient::with(['sandwitches'])->get(['id','name']);

        return response()->json($ingredients, 200);
    }

    public function store(Request $request)
    {
        $request->validate('name');

        return Ingredient::create($request->all());
    }
    public function show_name(){
        $skladnik = Ingredient::
            orderBy('name')
            ->take(10)
            ->get();
            return $skladnik;
    }
    public function show($id)
    {
        return Ingredient::find($id);
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
    public function search($name)
    {
        return Ingredient::where('name', 'like', '%'.$name.'%')->get();
    }
}
