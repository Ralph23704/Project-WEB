<?php

namespace App\Models;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;

class data extends Model {

    public $url;

    function setUrl($url){
        $this->url= $url;
    }

    /**
     * @throws GuzzleException
     */
    function getData(String $url){
        $client = new Client(); //GuzzleHttp\Client
        $response = $client->request('GET', $url, [
            'verify'  => false,
        ]);
        $responseBody = json_decode($response->getBody());
        return $responseBody;
    }

    /**
     */
    function sendData($url,$data){
        $response = Http::post($url, $data);
        return $response->json();
    }


}
