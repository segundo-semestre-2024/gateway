<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class SaleController extends Controller
{
protected $apiUrl;
    public function __construct()
    {
        $this->apiUrl = env('MICROSERVICIO_API_URL');
    }
    
    public function index()
    {
        $url=$this->apiUrl.'/sales/';
        $response=Http::get($url);
        return $response->json();
    }

}
