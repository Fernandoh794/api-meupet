<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class IbgeServices
{
    public function getAllCidades()
    {
        $response = Http::get('https://servicodados.ibge.gov.br/api/v1/localidades/municipios');
        return $response->json();
    }

    public function getCidadeById($id)
    {
        $response = Http::get("https://servicodados.ibge.gov.br/api/v1/localidades/municipios/{$id}");
        return $response->json();
    }

    public function getEstadoById($id)
    {
        $response = Http::get("https://servicodados.ibge.gov.br/api/v1/localidades/estados/{$id}");
        return $response->json();
    }

    public function getRegiaoById($id)
    {
        $response = Http::get("https://servicodados.ibge.gov.br/api/v1/localidades/regioes/{$id}");
        return $response->json();
    }

    public function getUFs()
    {
        $response = Http::get('https://servicodados.ibge.gov.br/api/v1/localidades/estados');
        return $response->json();
    }

    public function getUFById($id)
    {
        $response = Http::get("https://servicodados.ibge.gov.br/api/v1/localidades/estados/{$id}");
        return $response->json();
    }

    public function getMesorregioes()
    {
        $response = Http::get('https://servicodados.ibge.gov.br/api/v1/localidades/mesorregioes');
        return $response->json();
    }

    public function getMesorregiaoById($id)
    {
        $response = Http::get("https://servicodados.ibge.gov.br/api/v1/localidades/mesorregioes/{$id}");
        return $response->json();
    }

    public function getMicrorregioes()
    {
        $response = Http::get('https://servicodados.ibge.gov.br/api/v1/localidades/microrregioes');
        return $response->json();
    }

    public function getMicrorregiaoById($id)
    {
        $response = Http::get("https://servicodados.ibge.gov.br/api/v1/localidades/microrregioes/{$id}");
        return $response->json();
    }

    public function getMunicipiosByUF($uf)
    {
        $response = Http::get("https://servicodados.ibge.gov.br/api/v1/localidades/estados/{$uf}/municipios");
        return $response->json();
    }


    public function getAllEstados()
    {
        $response = Http::get('https://servicodados.ibge.gov.br/api/v1/localidades/estados');
        return $response->json();
    }
}
