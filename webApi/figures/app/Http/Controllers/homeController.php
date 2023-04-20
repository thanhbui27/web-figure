<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\productModel;
use App\Models\postModel;
use App\Models\bannerModel;
use App\Models\ImgHModel;
use App\Models\footerModel;
use App\Http\Controllers\Validator;

class homeController extends Controller
{
    public function index(){
        $product = $this->productLimit();
        $img = ImgHModel::get();
        $newBlog = postModel::join('person', 'person.id_per', '=', 'blog.id_cus')->limit(5)->get();
        return view('home') -> with(['productList' => $product,
                                     'newBlog' => $newBlog,
                                    'img' => $img]);
    }
    public function productLimit(){
        return productModel::where('noibat','1') -> orderBy('id_pro','desc') -> limit(8)->get();
    }
    public function search(Request $request){
        $key = $request->key;
        $action = $request -> action;
        switch($action){
            case 'show':
                $products = productModel::where('name_pro', 'LIKE', '%' . $key . '%')->first();
                return view('response.rsSearch') -> with('product' , $products);
            break;
            case 'search':
                $products = productModel::where('name_pro', 'LIKE', '%' . $key . '%')->limit(6) -> get();
                $count = productModel::where('name_pro', 'LIKE', '%' . $key . '%') -> count();
                return [$products,$count];
            break;
        }
      
    }
    public function showRoute(){
        $footer = footerModel::get();
        $banner = bannerModel::get();
        return [$banner,$footer];
    }
    
}
