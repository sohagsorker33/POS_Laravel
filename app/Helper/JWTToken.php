<?php

namespace App\Helper;
use Firebase\JWT\JWT;
class  JWTToken
{
  function createToken(){

  }

  function verifyToken($userEmail){
     $key=env('JWT_KEY');
     $payload = [
        'iss' => 'laravel-token',
        'iat' => time(),
        'exp' => time() + (60 * 60),
        'userEmail' => $userEmail
    ];
    JWT::encode($payload, $key);
  }



}
