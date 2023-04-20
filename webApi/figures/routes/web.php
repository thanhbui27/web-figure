<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminDashboardController;
use function Ramsey\Uuid\v1;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', 'homeController@index')->name('home');
Route::get(adminDashboardController::LinkBanner()[0] -> link, 'homeController@index')->name('home');



Route::get('search', 'homeController@search')->name('search');
Route::get('route', 'homeController@showRoute')->name('route');

// login 
Route::get('login', function () {
    if (session()->has('id')) {
        return redirect('home');
    }
    return view('login');
})->name('login.index');

Route::get('/spinningWheel',"sprinningWheelController@index") -> name('spinningWheel');

Route::post('SignUp', 'loginController@signUp')->name('login.signup');
Route::post('login', 'loginController@checkLogin')->name('login.check');
Route::get('logOut', 'loginController@logOut')->name('login.out');


//user 
Route::get('updateUser', 'userController@updateUser')->name('updateUser');
Route::get('updateCurrent', 'userController@updateCurrent')->name('updateCurrent');


//product
Route::get(adminDashboardController::LinkBanner()[1] -> link, 'productController@index')->name('product');
Route::get('CheckPrice', 'productController@CheckPrice')->name('CheckPrice');
Route::get('sorts', 'productController@Sort')->name('sorts');
Route::get('sortKinds', 'productController@sortKinds')->name('sortKinds');
Route::get('sortSizes', 'productController@sortSizes')->name('sortSizes');

//deltail Product
Route::get('detailProduct/{id}', 'detailsProductController@index')->name('detailProduct');


//cart 
Route::get('cart', 'cartController@index')->name('cart');
Route::get('showCart', 'cartController@showCart')->name('showCart');
Route::get('actionCart', 'cartController@action')->name('actionCart');
Route::get('addCartD', 'cartController@addCartD')->name('addCartD');

//blog
Route::get(adminDashboardController::LinkBanner()[3] -> link, 'postController@index')->name('blog');
Route::get('detailPost/{id}', 'postController@show')->name('detailPost');

Route::group(['middleware' => ['checkUser']], function () {
    //pay product 
    Route::post('payProduct', 'PayProductController@actionPay')->name('payProduct');
    Route::get('vnPayReturn', 'PayProductController@vnPayReturn')->name('vnPayReturn');
    Route::get('MomoReturn', 'PayProductController@MomoReturn')->name('MomoReturn');
    
    //comment
    Route::get('CommentBlog', 'postController@createComment')->name('CommentBlog');
    Route::get('commentDetailProduct', 'detailsProductController@commentDetailProduct')->name('commentDetailProduct');
    Route::get('RateProduct', 'detailsProductController@RateProduct')->name('RateProduct');
    
    //user
    Route::get('user', function () {
        return view('user');
    })->name('user');
   
    //blog
    Route::get('postBlog', function () {
        return view('postBlog');
    })->name('postBlog');
    Route::post('addBlog', 'postController@create')->name('addBlog');
    Route::get('feel', 'postController@feel')->name('feel');

    Route::get('luckySpin',"sprinningWheelController@luckySpin") -> name('luckySpin');
    Route::get('subSpin',"sprinningWheelController@subSpin") -> name('subSpin');
    Route::get('gift',"sprinningWheelController@gift") -> name('gift');
    Route::get('showGift',"sprinningWheelController@showGift") -> name('showGift');

    Route::get('getOrder',"userController@getOrder") -> name('getOrder');
    Route::get('getProduct',"userController@getProduct") -> name('getProduct');
    Route::post('changePassword', 'userController@changePassword')->name('changePassword');
});

Route::get('searchBy',"productController@searchBy")->name('searchBy');
Route::get('resultSearch',"productController@search")->name('resultSearch');
Route::get('getListCate',"CateController@listCate")->name('getListCate');

Route::get('Paydone', function () {
    return view('Paydone');
})->name('Paydone');

Route::get(adminDashboardController::LinkBanner()[2] -> link,"contactController@index")->name('contact');

// spinning wheel
Route::get('/dataSpin',"sprinningWheelController@dataSpin") -> name('dataSpin');
Route::get('/showAllGift',"sprinningWheelController@showAllGift") -> name('showAllGift');

Route::group(['prefix' => 'admin', 'middleware' => ['checkAdmin']], function () {
    Route::get('/', 'adminDashboardController@index')->name('admin');
    Route::post('/updateDImg', 'adminDashboardController@uploadImg')->name('updateDImg');
    Route::get('adminContent','adminDashboardController@indexTex')->name('adminContent');
    Route::get('updateText','adminDashboardController@updateText')->name('updateText');

    Route::get('adminBanner',"adminDashboardController@showBanner")->name('adminBanner');
    Route::get('adminActionBanner',"adminDashboardController@actionBanner")->name('adminActionBanner');
    //order 
    Route::get('adminOrder', 'orderController@index')->name('adminOrder');
    Route::get('adminOrderShow', 'orderController@show')->name('adminOrderShow');
    Route::get('adminOrderSearch', 'orderController@search')->name('adminOrderSearch');
    Route::get('adminOrderConfim', 'PayProductController@ConfimPayNomal')->name('adminOrderConfim');  
    //sort
    Route::get('adminSort','CateController@index')->name('adminSort');
    //admin cate
    Route::get('adminAddListSort','CateController@create')->name('adminAddListSort');
    Route::get('admineditSort','CateController@edit')->name('admineditSort');
    Route::get('adminupdateSort','CateController@update')->name('adminupdateSort');
    Route::get('admindeleteSort','CateController@destroy')->name('admindeleteSort');

    Route::get('ListProduct', 'productController@ListProductAdmin')->name('ListProduct');
    Route::post('createProduct', 'productController@create')->name('createProduct');
    Route::get('showInf', 'productController@show')->name('showInf');
    Route::post('updateProduct', 'productController@update')->name('updateProduct');
    Route::get('searchProduct', 'productController@searchProduct')->name('searchProduct');
    Route::get('deleteProduct', 'productController@destroy')->name('deleteProduct');
    Route::get('addProduct', 'productController@showAdmin')->name('adminProduct');

    Route::get('addProductImg', 'productController@productImg')->name('addProductImg');
    Route::post('addactionImg', 'productController@actionImg')->name('addactionImg');

    //user
    Route::get('adminCustomer', 'userController@show')->name('adminCustomer');
    Route::get('adminCustomergetInf', 'userController@getInf')->name('adminCustomergetInf');
    Route::get('adminCustomersearchInf', 'userController@searchInf')->name('adminCustomersearchInf');
    Route::get('adminCustomerdestroy', 'userController@destroy')->name('adminCustomerdestroy');
    Route::get('upAdmin', 'userController@upAdmin')->name('upAdmin');
    

    //voucher
    Route::get('/voucher',"voucherController@create")->name('voucherAdmin');
    Route::get('/createVoucher',"voucherController@store")->name('createVoucher');
    Route::get('/listVoucher',"voucherController@index")->name('listVoucher');
    Route::get('/updateVoucher',"voucherController@update")->name('updateVoucher');

    //spinning wheel
    Route::get('/adminSpinning',"sprinningWheelController@indexAdmin")->name('adminSpinning');
    Route::post('/addSpinningGift',"sprinningWheelController@addGift")->name('addSpinningGift');


});

// google and facebook
Route::get('/auth/redirect/{provider}', 'SocialController@redirect');
Route::get('/callback/{provider}', 'SocialController@callback');

//send email 
Route::post('/sendEmail', 'mailController@sendEmail')->name('sendEmail');
