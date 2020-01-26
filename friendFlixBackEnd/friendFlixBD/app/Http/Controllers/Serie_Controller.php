<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Serie;

class Serie_Controller extends Controller
{
    public function createSerie(Request $request){
        $serie= new Serie();

        $serie->nome=$request->nome;
        $serie->sinopse=$request->sinopse;
        $serie->numero_episodios=$request->numero_episodios;
        $serie->ano_lancamento=$request->ano_lancamento;
        $serie->save();

        return response()->json([$serie]);
    }

    public function listSerie(){
        $serie = Serie::all();
        return response()->json($serie);
    }

    public function showSerie($id){
        $serie = Serie::findOrFail($id);
        return response()->json([$serie]);
    }
    public function updateSerie(Request $request, $id){

        $serie = Serie::find($id);

        if($serie){
            if($request->nome){
                $serie->nome = $request->nome;
            }
            if($request->sinopse){
                $serie->sinopse = $request->sinopse;
            }
            if($request->numero_episodios){
                $serie->numero_episodios = $request->numero_episodios;
            }
            if($request->ano_lancamento){
                $serie->ano_lancamento = $request->ano_lancamento;
            }
            else{
                return response()->json(['insira o parâmetro a ser atualizado']);
            }
            $serie->save();
            return response()->json([$serie]);
        }
        else{
            return response()->json(['Esta série não existe']);
        }
    }
    public function deleteSerie($id){
        Serie::destroy($id);
        return response()->json(['Série deletada']);
    }

}
