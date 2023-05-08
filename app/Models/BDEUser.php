<?php

namespace App\Models;

use GuzzleHttp\Exception\GuzzleException;
use http\Client;
use Illuminate\Support\Facades\Hash;

class BDEUser
{
    /**
     * @throws GuzzleException
     */
    public function signUp($data){
        $url = 'http://localhost:3000/users';
        $get=(new data)->getData($url);
        $done=0;
        $cookie=[];
        foreach ($get as $item){
            if(($data['email']==$item->email)and(Hash::check($data['password'],$item->password))){
                $cookie=$item;
                $done=1;
                break;
            }
        }
        if ($done==1){
            return ['success',$cookie];
        }
        return 'FAIL';
    }

    public function signIn($data){
        $url = 'http://localhost:3000/users'; //mettre l'API pour la connexion
        return (new data)->sendData($url,$data);
    }

    public function signUpAdmin($data): array|string
    {
        $url = 'http://localhost:3000/admin';
        $get=(new data)->getData($url);
        $done=0;
        $cookie=[];
        foreach ($get as $item){
            if(($data['email']==$item->email)and($data['password']==$item->password)){
                $cookie=$item;
                $done=1;
                break;
            }
        }
        if ($done==1){
            return ['success',$cookie];
        }
        return 'FAIL';
    }
}
