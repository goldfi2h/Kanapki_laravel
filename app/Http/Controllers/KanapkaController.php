<?php

namespace App\Http\Controllers;

// use App\Models\Kanapka;
// use App\Models\Pieczywo;

use App\Models\Sandwitch;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
// use PDO;

class KanapkaController extends Controller
{
    public function index()
    {
        // $sandwitches = Sandwitch::with(['bread' => function ($query) {
        //     return $query->select(['id', 'name']);
        // }])->get(['id', 'bread_id', 'price', 'name']);

        $sandwitches = Sandwitch::with(['bread:id,name', 'ingredients'])->get(['id', 'bread_id', 'price', 'name']);

        return response()->json($sandwitches, 200);
        // return Kanapka::all();
        //return DB::select('SELECT * FROM kanapki');
    }

    public function store(Request $request)
    {
        //$request->validate('name'); tu zamiast tego ma być tablica, bo potrzeba wielu
        $request->validate([
            'name' =>'required',
            'price'=> 'required',
            'bread_id'=>'required'
        ]);

        // return Kanapka::create($request->all());
        //$kanapka = Sandwitch::find($request->id);
        // $kanapka = Sandiwtch::find(1);
        // Dołaczenie składników do kanapki
        // $kanapka->ingredients()->attach(id_składnika lub [id_składników])
        //$kanapka->ingredients()->attach(1);
        // / $kanapka->ingredients()->attach(id_składnika lub [id_składników], ['extra_spicy' => $request->extra_spicy])
        // sync([1, 2, 3])
    
        // / $kanapka->ingredients()->detach(id_składnika lub [id_składników])
        return Sandwitch::create($request->all());
    }

    public function show_name(){
        // foreach (Kanapka::all()as $kanapka){
        //     echo $kanapka->nazwa;
        //     printf("\n");
        // }
    }
    
    public function show(Request $request, Sandwitch $sandwitch)
    {
        if ($request->has('showBread') && $request->get('showBread') === "1") {
            if (!$sandwitch->relationLoaded('bread')) {
                $sandwitch->load('bread:id,name');
            }
        }

        return response()->json($sandwitch, 200);
        // return Kanapka::find($id);
    }

    public function update(Request $request, $id)
    {
        $kanapka = Sandwitch::find($id);
        $kanapka->ingredients()->attach(1);
    }

    public function add_ingredients($id)
    {
        $kanapka = Sandwitch::find($id);
        $kanapka->ingredients()->attach(1);
        return $kanapka;
    }

    public function destroy($id)
    {

    }
    public function search($name)
    {
         return Sandwitch::where('name', 'like', '%'.$name.'%')->get();
    }
    public function bread(){
    }
}
