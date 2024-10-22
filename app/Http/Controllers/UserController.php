<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Exception;
class UserController extends Controller
{
    function user(Request $request){
        try{
            User::create( [
                'firstName'=>$request->input('firstName'),
                'lastName'=>$request->input('lastName'),
                'email'=>$request->input('email'),
                'mobile'=>$request->input('mobile'),
                'password'=>$request->input('password'),
            ]);
           return response()->json([
             "status"=>"success",
             "message"=>"User created successfully"
           ],status:200);
        }catch(Exception $e){
            return response()->json([
                "status"=>"failed",
                "message"=>$e->getMessage()
              ],status:200);
        }

    }
}
