<?php

namespace App\Http\Controllers;
use App\Models\Joc;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class JocsController extends Controller
{
    public function index(){
        $jocs = Joc::all();
        return view('jocs.indexJocs', ['jocs'=>$jocs]);
    }

    public function create(){
        return view('jocs.creaJoc');
    }

    public function store(Request $request){
        Joc::create($request->except('_token'));
        return redirect('/jocs');
    }

    public function edit(Joc $joc){
        return view('jocs.editJoc')->with
        (['joc'=>$joc]);
    }

    public function update(Request $request, Joc $joc){
        //$joc = $request->all();
        $joc->nom = $request['nom'];
        $joc->numJugadors = $request['numJugadors'];
        $joc->save();
        return redirect('/jocs');
    }

    public function destroy(Joc $joc){
        $joc->delete();
        return redirect('/jocs');
    }
}
