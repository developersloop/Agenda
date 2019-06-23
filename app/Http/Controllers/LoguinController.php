<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
class LoguinController extends Controller
{
    public function __construct(){

    }

    public function index()
    {
        $inputs  = [
            'Empresa'=>'Fazu',
            'Course'=>'Vue and Laravel'
        ];
        return response()->json($inputs);
    }

    public function login(Request $request)
    {
        $inputs = $request->all();

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password]))
        {
            $user = Auth::user();
             $sucess = $user->createToken('myApp')->accessToken;
             return response()->json([
                 'token_type' => 'Bearer',
                 'token'=>$sucess,
                 ]);
        }
         return response()->json(array(['message'=>'GET OUT!']));
    }
}
