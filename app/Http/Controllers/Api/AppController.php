<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class AppController extends Controller
{
    public function index()
    {
        $client = new Client();
        $url = 	'https://api.itbook.store/1.0/new';

        $response = $client->request('GET', $url);
        $responseBody = json_decode($response->getBody());

        return response()->json($responseBody);
    }
    public function show($isbn13)
    {
        $client = new Client();
        $url = 	'https://api.itbook.store/1.0/books/'.$isbn13;

        $response = $client->request('GET', $url);
        $responseBody = json_decode($response->getBody());
        return response()->json($responseBody);
    }
    public function search(Request $request){
        $search = $request->input('search');
        $client = new Client();
        $url = 	'https://api.itbook.store/1.0/search/'.$search;

        $response = $client->request('GET', $url);
        $responseBody = json_decode($response->getBody())->books;
        return response()->json($responseBody);

    }
}
