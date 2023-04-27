<?php

namespace App\Models;

use GuzzleHttp\Exception\GuzzleException;
use http\Client;

class BDEUser
{
    /**
     * @throws GuzzleException
     */
    public function signUp($data){
        $url = 'http://localhost:4000/users';
        $get=(new data)->getData($url);
        $done=0;
        foreach ($get as $item){
            if(($data['email']==$item->email)and($data['password']==$item->password)){
                $done=1;
            }
            else{
                $done=0;
            }
        }
        if ($done==1){
            return 'success';
        }
        return 'FAIL';
    }

    public function signIn($data){
        $url = 'http://localhost:4000/users'; //mettre l'API pour la connexion
        return (new data)->sendData($url,$data);
    }
}
