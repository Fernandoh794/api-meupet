<?php

namespace App\Http\Controllers\Api\Adocao;
use App\Http\Controllers\Controller;
use App\Http\Resources\AnimalAdocaoResource;
use App\Models\AnimaisAdocao;
use App\Services\IbgeServices;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class AnimalAdocaoController extends Controller
{

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function index(Request $request){
        $animais = AnimaisAdocao::all();
        $resouce = AnimalAdocaoResource::collection($animais);
        return response()->json($resouce, 200);
    }


    /**
     * @param Request $request
     * @return JsonResponse
     * {
    "nome": "Fido",
    "raca": "Labrador Retriever",
    "data_nascimento": "2018-01-01 12:00:00",
    "sexo": "Macho",
    "estado_cod": "2",
    "cidade_cod": "25",
    "imagem": "https://example.com/imagem.jpg",
    "descricao": "Um cãozinho muito amigável e brincalhão."
    }
     */
    public function store(Request $request){
        $request->request->add(['user_id' => Auth::id()]);
        try {
            DB::beginTransaction();
            $animal = AnimaisAdocao::create($request->all());
            DB::commit();
            return response()->json($animal, 201);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(["message" => $e->getMessage()], 500);
        }
    }

    /**
     * @param Request $request
     * @param AnimaisAdocao $animais_adocao
     * @return JsonResponse
     */
    public function show(Request $request, AnimaisAdocao $animais_adocao){

        return response()->json(new AnimalAdocaoResource($animais_adocao), 200);
    }

    /**
     * @param Request $request
     * @param AnimaisAdocao $animais_adocao
     * @return JsonResponse
     * {
    "nome": "Fidos",
    "raca": "Labrador Retriever",
    "data_nascimento": "2018-01-01 12:00:00",
    "sexo": "Macho",
    "estado_cod": "2",
    "cidade_cod": "25",
    "imagem": "https://example.com/imagem.jpg",
    "descricao": "Um cãozinho muito amigável e brincalhãos."
    }
     */
    public function update(Request $request, AnimaisAdocao $animais_adocao){
        try {
            DB::beginTransaction();
            $animais_adocao->update($request->all());
            DB::commit();
            return response()->json($animais_adocao, 200);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(["message" => $e->getMessage()], 500);
        }
    }

    public function destroy(Request $request, AnimaisAdocao $animais_adocao){
        try {
            DB::beginTransaction();
            $animais_adocao->delete();
            DB::commit();
            return response()->json(null, 204);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(["message" => $e->getMessage()], 500);
        }

    }


}
