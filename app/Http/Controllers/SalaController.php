<?php

namespace App\Http\Controllers;
use App\Models\Sala;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class SalaController extends Controller
{
    public function index(){
        $salas = Sala::all();
        return view('salas.indexsalas', ['salas'=>$salas]);
    }

    public function create(){
        return view('salas.creaSala');
    }

    public function store(Request $request){
        Sala::create($request->except('_token'));
        return redirect('/salas');
    }
    public function edit(Sala $sala){
        return view('salas.editSala')->with
        (['sala'=>$sala]);
    }

    public function update(Request $request, Sala $sala){
        //$joc = $request->all();
        $sala->numSala = $request['numSala'];
        $sala->salaOcupada = $request['salaOcupada'];
        $sala->save();
        return redirect('/salas');
    }

    public function destroy(Sala $sala){
        $sala->delete();
        return redirect('/salas');
    }
}
