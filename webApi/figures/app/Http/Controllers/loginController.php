<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\accountModel;
use App\Models\personModel;
use App\Http\Controllers\Validator;
use Illuminate\Support\Facades\Hash;

class loginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function checkLogin(Request $request){
        $user = $request -> username;
        $pass = $request -> password;
       $username =  accountModel::where('username', $user) -> value('username') ;
       $password = accountModel::where('username', $user) -> value('password') ;
       $user = [
         'id' => accountModel::where('username',$user) -> value('id_ac'),
         'username' => accountModel::where('username',$user) -> value('username'),
         'password' => accountModel::where('username',$user) -> value('password'),
         'quyen' => accountModel::where('username',$user) -> value('quyen')
        ];  
        // dd([
        //     'pass_1' => $pass,
        //     'pass_2' => $password
        // ]);
       if(Hash::check($pass,$password)){
            session($user);
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
            return redirect('home') ;
       }else{
        $err = 'tài khoản hoặc mật khẩu không đúng';
        return view('login',compact('err'));
       }
    }
    public function signUp(Request $request){
         $request->validate([
            'usernameDK' => 'required',
            'passwordDK' => 'required',
        ]);
        
     if(!accountModel::where('username', $request -> usernameDK) -> value('username')){
         if(accountModel::create(['username' => $request -> usernameDK , 'password' => bcrypt($request -> passwordDK)])){
                $sus = 'Đăng ký thành công, Vui lòng đăng nhập lại để tiếp tục';
                return view('login',compact('sus'));
            }else{
                return view('login');
            }
     }else{
        $err = 'tài khoản đã tồn tại';
        return view('login',compact('err'));
     }
    }
    public function logOut(){
       session()->forget('id');
       session()->forget('username');
       session()->forget('password');
       session()->forget('quyen');
       return view('login');
    }



}
