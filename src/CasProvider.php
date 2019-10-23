<?php
namespace Yjtec\CasClient;

class CasProvider
{
    public function __construct($config){

    }
    public function retrieveByCredentials(array $credentials){
        return $credentials;
    }
    public function retrieveByToken($identifier, $token)
    {
        dd($token);
    }
}
