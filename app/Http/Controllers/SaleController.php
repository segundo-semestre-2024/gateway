<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class SaleController extends Controller
{
protected $apiUrl;
protected $apiKey;
    public function __construct()
    {
        $this->apiUrl = env('MICROSERVICIO_API_URL');
        $this->apiKey = env('API_KEY');
    }

    // public function index()
    // {
    //     $url=$this->apiUrl.'/sales/';
    //     $response=Http::get($url);
    //     return $response->json();
    // }


    public function index()
    {
        $url = $this->apiUrl . '/sales/';
        $response = Http::withHeaders(['X-API-Key' => $this->apiKey])->get($url);
        return $response->json();
    }
    


}
