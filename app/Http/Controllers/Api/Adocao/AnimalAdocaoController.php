<?php

namespace App\Http\Controllers\Api\Adocao;
use App\Http\Controllers\Controller;
use App\Models\AnimaisAdocao;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AnimalAdocaoController extends Controller
{

    public function index(Request $request){

    }

    public function store(Request $request){
        $request->request->add(['user_id' => 1]);
        $animal = AnimaisAdocao::create($request->all());
        return response()->json($animal, 201);
    }

    public function show(Request $request, $id){

    }

    public function update(Request $request, $id){

    }

    public function destroy(Request $request, $id){

    }


}
