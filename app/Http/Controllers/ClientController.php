<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Http;

class ClientController extends Controller
{

    public function index(){

        if($token=$this->auth()){
 
            $response = Http::withToken($token)->get(env('API_URL').'posts/user/26');
 
            // Determine if the status code is >= 200 and < 300...
            if($response->successful()){
                return $response->object();
            }
 
            // Determine if the response has a 400 level status code...
            if($response->clientError()){
                return "error 400";
            }
            
            // Determine if the response has a 500 level status code...
            if($response->serverError()){
                return "error 500";
            }
 
            // Determine if the status code is >= 400...
            if($response->failed()){
                return "error >=400";
            }
        }
       
    }

    private function auth(){
        
        $response = Http::post(env('API_URL').'login_check',[
            'username' => env('API_USERNAME'),
            'password' => env('API_PASSWORD'),
        ]);
 
        if($response->successful()){
            if(isset($response->object()->token)){
                return $response->object()->token;
            }
        }else{
            die("auth error");
        }
    }

}
