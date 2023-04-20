<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ImgBModel;
use App\Models\ImgPModel;
use App\Models\bannerModel;
use App\Models\ImgHModel;
use App\Models\footerModel;
use App\Models\contactModel;


class adminDashboardController extends Controller
{
    public function index(){
        $imgb = ImgBModel::get();
        $imgp = ImgPModel::get();
        $imgh = ImgHModel::get();
        return view('admin.adminSlide') -> with(['imgb' => $imgb,'imgp' => $imgp,'imgh' => $imgh]);
    }
    public function indexTex(){
      $imgh = ImgHModel::get();
      $contact = contactModel::first();
      return view('admin.adminContent') -> with(['imgh' =>  $imgh,'contact' => $contact]);
    }
    public function updateText(Request $request){
      $action = $request -> action;
      switch($action){
        case 'home':
          $imgh = ImgHModel::find(1);
          $imgh -> text = $request -> text;
          $imgh -> save();
          return 'thanh cong';
        break;
        case 'contact1':
          $contact = contactModel::find(1);
          $contact -> lefts = $request -> text;
          $contact -> save();
          return 'thanh cong';
        break;
        case 'contact2':
          $contact = contactModel::find(1);
          $contact -> rights = $request -> text;
          $contact -> save();
          return 'thanh cong';
        break;
      }
    }
    public function uploadImg(Request $request){
        $action = $request -> action;
        switch($action){
            case 'img1':
                $id = $request -> id;
                $img = ImgHModel::find($id);
                if ($img !== null) {
                  if ($request-> file('img1')) {
                    $request->validate([
                      'img1' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
                    ]);
                    $name1 = time() + 1 . '.' . $request->file('img1')->extension();
                    $request->file('img1')->move(public_path('layout/Img'), $name1);
                    $img -> imgSlideH = $name1;
                    $img -> save();
                    return $name1;
                  }
                }
                return 'that bai';
                
            break;
            case 'img2':
                $id = $request -> id;
                $img = ImgHModel::find($id);
                if ($img !== null) {
                  if ($request-> file('img2')) {
                    $request->validate([
                      'img2' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
                    ]);
                    $name1 = time() + 1 . '.' . $request->file('img2')->extension();
                    $request->file('img2')->move(public_path('layout/Img'), $name1);
                    $img -> imgSlideH = $name1;
                    $img -> save();
                    return $name1;
                  }
                }
                return 'that bai';
            break;

            case 'img3':
                $id = $request -> id;
                $img = ImgHModel::find($id);
                if ($img !== null) {
                  if ($request-> file('img3')) {
                    $request->validate([
                      'img3' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
                    ]);
                    $name1 = time() + 1 . '.' . $request->file('img3')->extension();
                    $request->file('img3')->move(public_path('layout/Img'), $name1);
                    $img -> imgSlideH = $name1;
                    $img -> save();
                    return $name1;
                  }
                }
                return 'that bai';
            break;
            case 'img4':
                $id = $request -> id;
                $img = ImgHModel::find($id);
                if ($img !== null) {
                  if ($request-> file('img4')) {
                    $request->validate([
                      'img4' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
                    ]);
                    $name1 = time() + 1 . '.' . $request->file('img4')->extension();
                    $request->file('img4')->move(public_path('layout/Img'), $name1);
                    $img -> imgSlideH = $name1;
                    $img -> save();
                    return $name1;
                  }
                }
                return 'that bai';
            break;
          case 'uploadIP':
            $id = $request -> id;
            $img = ImgPModel::find($id);
            if ($img !== null) {
              if ($request-> file('imgP')) {
                $request->validate([
                  'imgP' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:4048',
                ]);
                $name1 = time() + 1 . '.' . $request->file('imgP')->extension();
                $request->file('imgP')->move(public_path('layout/Img'), $name1);
                $img -> imgSlideP = $name1;
                $img -> save();
                return $name1;
              }
            }
            return 'that bai';
          break;
          case 'uploadIB':
            $id = $request -> id;
            $img = ImgBModel::find($id);
            if ($img !== null) {
              if ($request-> file('imgblog')) {
                $request->validate([
                  'imgblog' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:4048',
                ]);
                $name1 = time() + 1 . '.' . $request->file('imgblog')->extension();
                $request->file('imgblog')->move(public_path('layout/Img'), $name1);
                $img -> imgSlideB = $name1;
                $img -> save();
                return $name1;
              }
            }
            return 'that bai';
          break;
         
        }
    }
    public function showBanner(){
      $banner = bannerModel::get();
      $footer = footerModel::first();
      return view('admin.adminBanner') -> with(['banner' => $banner , 'footer' => $footer]);
    }
    public function actionBanner(Request $request){
      $action = $request -> action;
      switch($action){
        case 'show':
        $id = $request -> id;
        $banner = bannerModel::find($id);
        return $banner;
        break;
        case 'action':
          $id = $request -> id;
          $name = $request -> name;
          $link = $request -> link;
          $banner = bannerModel::find($id);
          if($banner){
            $banner -> name = $name;
            $banner -> link = $link;
            $banner -> save();
            return [$name,$link];
          }
          bannerModel::create([
            'name'=>$name,
            'link' => $link
          ]);
          return [bannerModel::get(),'show'];
        break;
        case 'remove':
          $id = $request -> id;
          bannerModel::find($id) -> delete();
        return 'thanh cong';
        break;
        case 'footer1':
          $data = $request -> data;
          $footer = footerModel::find(1);

          $footer -> lefts = $data;
          $footer -> save();
          return 'thành công';
        break;
        case 'footer2';
          $data = $request -> data;
          $footer = footerModel::find(1);

          $footer -> bettwens = $data;
          $footer -> save();
          return 'thành công';
        break;
        case 'footer3':
          $data = $request -> data;
          $footer = footerModel::find(1);

          $footer -> rights = $data;
          $footer -> save();
          return 'thành công';
        break;
      }
    }
    public static function LinkBanner(){
      $banner = bannerModel::get();
      return $banner;
    }
  
}
