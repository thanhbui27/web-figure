<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Middleware\checkApiToken;
use App\Models\accountModel;
use App\Models\personModel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ApiLogin extends Controller
{

    public function login(Request $request) {
        $fields = $request->validate([
            'username' => 'required|string',
            'password' => 'required|string'
        ]);
        $user = User::where('username', $fields['username'])->first();
        if(!$user || !Hash::check($fields['password'],$user->password)) {
            return response([
                'status' => 401,
                'user' => null,
                'token' => null
            ],401);
        }
        $isPerson = personModel::where('id_per',$user -> id_ac) -> value('id_per');
        if(!$isPerson){
             personModel::create(['id_per' => $user -> id_ac,'fullname' => $fields['username'] ]);     
        }
        $token = $user->createToken('myapptoken')->plainTextToken;

        $response = [
            'status' => 201,
            'user' => $user,
            'token' => $token
        ];
        return response($response, 201);
    }
   
    public function register(Request $request) {
        $fields = $request->validate([
            'username' => 'required|string',
            'password' => 'required|string'
        ]);

       User::create([
            'username' => $fields['username'],
            'password' => bcrypt($fields['password'])
        ]);

        return response(201);
    }
    public function logout(Request $request) {
        $request->user()->tokens()->delete();
        return response(200);
    }
   
   public function checkUser(Request $getInfo){

        $data = json_decode($getInfo -> data,true);
        $user = accountModel::where("provider_id",$data['id']) -> first();
        if(!$user){
            $user = accountModel::create([
                'name'     => $data['givenNane'],
                'username'    =>  $data['email'],
                'provider' => 'google',
                'provider_id' => $data['id']
            ]);
            personModel::create(['id_per' => $user -> id_ac,'fullname' => $data['email']]);   
            
            $token = $user->createToken('myapptoken')->plainTextToken;
            $response = [
                'status' => 201,
                'user' => $user,
                'token' => $token
            ];
            return response($response);
            
        }
        $token = $user->createToken('myapptoken')->plainTextToken;
        $response = [
            'status' => 201,
            'user' => $user,
            'token' => $token
        ];
    return response($response);
   }
  

}
