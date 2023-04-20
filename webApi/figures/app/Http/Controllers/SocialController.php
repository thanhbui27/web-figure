<?php

namespace App\Http\Controllers;

use Validator, Redirect, Response, File;
use App;
use Laravel\Socialite\Facades\Socialite;
use App\Models\accountModel;
use App\Models\personModel;
use Illuminate\Http\Request;

class SocialController extends Controller
{   
    public function redirect($provider)
    {
        return Socialite::driver($provider)->redirect();
    }
    public function callback($provider)
    {
        $getInfo = Socialite::driver($provider)->user();
        $user = $this->createUser($getInfo, $provider);
        session([
            'id' => $user -> id_ac,
            'username' => $user -> username,
            'password' => $user -> password,
            'quyen' => $user -> quyen 
        ]);
        $isPerson = personModel::where('id_per',session('id')) -> value('id_per');
        if(!$isPerson){
             personModel::create(['id_per' => session('id'),'fullname' => session('username')]);     
        }
        $getPerson = personModel::find(session('id'));
             $cus =[
                 'id_cus' => $getPerson['id_per'],
                 'fullname' => $getPerson['fullname'],
                 'email' => $getPerson['email'],
                 'dates' => $getPerson['dates'],
                 'cmnd' => $getPerson['cmnd'],
                 'adress' => $getPerson['adress'],
                 'sdt' => $getPerson['sdt']
             ];
             session($cus);
        return redirect()->to('/home');
    }
    function createUser($getInfo, $provider)
    {
        $user = accountModel::where('provider_id', $getInfo->id)->first();
        if (!$user) {
            $user = accountModel::create([
                'name'     => $getInfo->name,
                'username'    => $getInfo->email,
                'provider' => $provider,
                'provider_id' => $getInfo->id
            ]);
            session([
                'id' => $user -> id_ac,
                'username' => $user -> username,
                'password' => $user -> password,
                'quyen' => $user -> quyen 
            ]);
        }
        return $user;
    }
}
