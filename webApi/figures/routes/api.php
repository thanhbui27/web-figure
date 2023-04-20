<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::post("/Login","api\ApiLogin@Login");
Route::post("/register","api\ApiLogin@register");
Route::get("/cateProduct","api\ApiProduct@getProductCate");
Route::get("/getProductByCate/{id}","api\ApiProduct@getProductByCate");
Route::get("/getCate/{id}","api\ApiCateProduct@getCate");
Route::get("/getAllCate","api\ApiCateProduct@index");
Route::get("/topBuyProduct","api\ApiProduct@getTopProduct");
Route::get("/getComment/{id}","api\ApiProduct@getComment");
Route::get("/getImg/{id}","api\ApiProduct@getImg");
Route::get("/getProduct","api\ApiProduct@getProduct");
Route::get("/getBlog","api\ApiBlog@index");
Route::get("/getCommentBlog/{id}","api\ApiBlog@getCommentBlog");
Route::get("/getAllBlog","api\ApiBlog@getAllBlog");
Route::get('/getProductByUser/{id}',"api\ApiUser@getProductByUser");
Route::get("/showCart","api\ApiCart@showCart");
Route::get("/addCartD/{id}/{quantity}","api\ApiCart@addCartD");
Route::get("/ApiPays/{data}","api\ApiPay@actionPay"); 
Route::get("/vnPayReturn","api\ApiPay@vnPayReturn"); 
Route::get("/confimVnPay/{data}","api\ApiPay@confimVnPay"); 
Route::post("/checkUser/{data}","api\ApiLogin@checkUser"); 
Route::get("/searchProduct/{name}","api\ApiProduct@searchProduct"); 
Route::get("/getTopFigureAttention","api\ApiProduct@getTopFigureAttention");
Route::group(['middleware' => ['auth:sanctum']] , function() {
    Route::get('/RateProduct','api\ApiProduct@RateProduct');
    Route::get('/getFavProduct','api\ApiProduct@getFavProduct');
    Route::get('/addFavProduct','api\ApiProduct@addFavProduct');
    Route::get('/getInfoUser/{id}',"api\ApiUser@getInfoUser");
    Route::get('/getUser/{id}',"api\ApiUser@getUser");
    Route::get("/logout","api\ApiLogin@logout");
    Route::get("/updateCurrent","api\ApiUser@updateCurrent");   
    Route::get("/getListOrderById","api\ApiUser@getListOrderById"); 
    Route::post("/UpdateImage","api\ApiUser@UpdateImage");
    Route::get("/commentDetailProduct/{id_pro}/{content}/{id_user}","api\ApiProduct@commentDetailProduct");
});

           


