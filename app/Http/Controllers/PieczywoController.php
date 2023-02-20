<?php

namespace App\Http\Controllers;

use App\Models\Bread;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PieczywoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Bread::all();
        //return  DB::select('SELECT * FROM pieczywo');
    }
    public function store(Request $request)
    {
        $request->validate('name');
        return Bread::create($request->all());
    }
    public function show($chleb)
    {
        return Bread::find($chleb);
    }
    public function show_name(){
        $pieczywo = Bread::
            orderBy('name')
            ->take(10)
            ->get();
            return $pieczywo;
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        return Bread::destroy($id);
    }
    public function search($name)
    {
        return Bread::where('name', 'like', '%'.$name.'%')->get();
    }

}
