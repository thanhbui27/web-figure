<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\productModel;
use App\Models\categoryModel;
use App\Models\commentDPModel;
use App\Models\imageProductModel;
use App\Models\ImgPModel;
use App\Models\OrderModel;
use App\Models\sortHeightModel;
use App\Models\sortpriceModel;

class productController extends Controller
{
  public function index()
  {
    $product = productModel::orderBy('id_pro', 'desc')->paginate(16);
    $sortHeight = sortHeightModel::get();
    $sortPrice = sortpriceModel::get();
    $cates = categoryModel::get();
    $img = ImgPModel::get();
    return view('product')->with([
      'cates' => $cates,
      'sortHeight' => $sortHeight,
      'sortPrice' => $sortPrice,
      'productList' => $product,
      'img' => $img,
      'productCate' =>   $this->JoinData()
    ]);
  }
  public function CheckPrice(Request $request)
  {
    $priceStart = (int)$request->priceStart;
    $priceEnd = (int)$request->priceEnd;

    if ($priceStart === 0) {
      $product = productModel::where('price_new', '<', $priceEnd)->paginate(16);
    }
    if ($priceEnd === 0) {
      $product = productModel::where('price_new', '>', $priceStart)->paginate(16);
    }
    if ($priceStart !== 0 && $priceEnd !== 0) {
      $product = productModel::where('price_new', '>', $priceStart)->where('price_new', '<', $priceEnd)->paginate(16);
    }
    $sortHeight = sortHeightModel::get();
    $sortPrice = sortpriceModel::get();
    $cates = categoryModel::get();
    $img = ImgPModel::get();
    return view('product')->with([
      'cates' => $cates,
      'sortHeight' => $sortHeight,
      'sortPrice' => $sortPrice,
      'productList' => $product,
      'img' => $img,
      'productCate' =>   $this->JoinData()
    ]);
  }
  public function Sort(Request $request)
  {
    $data = $request->sort;
    switch ($data) {
      case 'tang';
        $product = productModel::orderBy('price_new', 'asc')->paginate(16);
        $sortHeight = sortHeightModel::get();
        $sortPrice = sortpriceModel::get();
        $cates = categoryModel::get();
        $img = ImgPModel::get();
        return view('product')->with([
          'cates' => $cates,
          'sortHeight' => $sortHeight,
          'sortPrice' => $sortPrice,
          'productList' => $product,
          'img' => $img,
          'productCate' =>   $this->JoinData()
        ]);
        break;
      case 'giam';
        $product = productModel::orderBy('price_new', 'desc')->paginate(16);
        $sortHeight = sortHeightModel::get();
        $sortPrice = sortpriceModel::get();
        $cates = categoryModel::get();
        $img = ImgPModel::get();
        return view('product')->with([
          'cates' => $cates,
          'sortHeight' => $sortHeight,
          'sortPrice' => $sortPrice,
          'productList' => $product,
          'img' => $img,
          'productCate' =>   $this->JoinData()
        ]);
        break;
      case 'az';
        $product = productModel::orderBy('name_pro', 'asc')->paginate(16);
        $sortHeight = sortHeightModel::get();
        $sortPrice = sortpriceModel::get();
        $cates = categoryModel::get();
        $img = ImgPModel::get();
        return view('product')->with([
          'cates' => $cates,
          'sortHeight' => $sortHeight,
          'sortPrice' => $sortPrice,
          'productList' => $product,
          'img' => $img,
          'productCate' =>   $this->JoinData()
        ]);
        break;
      case 'za';
        $product = productModel::orderBy('name_pro', 'desc')->paginate(16);
        $sortHeight = sortHeightModel::get();
        $sortPrice = sortpriceModel::get();
        $cates = categoryModel::get();
        $img = ImgPModel::get();
        return view('product')->with([
          'cates' => $cates,
          'sortHeight' => $sortHeight,
          'sortPrice' => $sortPrice,
          'productList' => $product,
          'img' => $img,
          'productCate' =>   $this->JoinData()
        ]);
        break;
      case 'moi';
        $product = productModel::orderBy('id_pro', 'desc')->paginate(16);
        $sortHeight = sortHeightModel::get();
        $sortPrice = sortpriceModel::get();
        $cates = categoryModel::get();
        $img = ImgPModel::get();
        return view('product')->with([
          'cates' => $cates,
          'sortHeight' => $sortHeight,
          'sortPrice' => $sortPrice,
          'productList' => $product,
          'img' => $img,
          'productCate' =>   $this->JoinData()
        ]);
        break;
      case 'cu';
        $product = productModel::orderBy('id_pro', 'asc')->paginate(16);
        $sortHeight = sortHeightModel::get();
        $sortPrice = sortpriceModel::get();
        $cates = categoryModel::get();
        $img = ImgPModel::get();
        return view('product')->with([
          'cates' => $cates,
          'sortHeight' => $sortHeight,
          'sortPrice' => $sortPrice,
          'productList' => $product,
          'img' => $img,
          'productCate' =>   $this->JoinData()
        ]);
        break;
    }
  }
  public function sortKinds(Request $request)
  {
    $data = $request->kind;
    $product = productModel::join('category', 'product.id_cate', '=', 'category.id_cate')->where('name_cate', $data)->orderBy('product.id_pro', 'desc')->paginate(16);
    $sortHeight = sortHeightModel::get();
    $sortPrice = sortpriceModel::get();
    $cates = categoryModel::get();
    $img = ImgPModel::get();
    return view('product')->with([
      'cates' => $cates,
      'sortHeight' => $sortHeight,
      'sortPrice' => $sortPrice,
      'productList' => $product,
      'img' => $img,
      'productCate' =>   $this->JoinData()
    ]);
  }
  public function sortSizes(Request $request)
  {
    $sizeStart = (int)$request->sizeStart;
    $sizeEnd = (int)$request->sizeEnd;
    if ($sizeStart === 0) {
      $product = productModel::where('chieucao', '=', $sizeEnd)->paginate(16);
    }
    if ($sizeEnd === 0) {
      $product = productModel::where('chieucao', '=', $sizeStart)->paginate(16);
    }
    if ($sizeStart !== 0 && $sizeEnd !== 0) {
      $product = productModel::where('chieucao', '>', ($sizeStart - 1))->where('chieucao', '<', ($sizeEnd + 1))->paginate(16);
    }
    $sortHeight = sortHeightModel::get();
    $sortPrice = sortpriceModel::get();
    $cates = categoryModel::get();
    $img = ImgPModel::get();
    return view('product')->with([
      'cates' => $cates,
      'sortHeight' => $sortHeight,
      'sortPrice' => $sortPrice,
      'productList' => $product,
      'img' => $img,
      'productCate' =>   $this->JoinData()
    ]);
  }
  public function JoinData()
  {
    $action = productModel::join('category', 'product.id_cate', '=', 'category.id_cate')->where('product.id_cate', 1)->orderBy('product.id_pro', 'desc')->limit(4)->get('product.*');
    $Chibi = productModel::join('category', 'product.id_cate', '=', 'category.id_cate')->where('product.id_cate', 2)->orderBy('product.id_pro', 'desc')->limit(4)->get('product.*');
    $scale = productModel::join('category', 'product.id_cate', '=', 'category.id_cate')->where('product.id_cate', 3)->orderBy('product.id_pro', 'desc')->limit(4)->get('product.*');
    return [
      'action' => $action,
      'chibi' => $Chibi,
      'scale' => $scale
    ];
  }
  // admin page
  public function ListProductAdmin()
  {
    $product = productModel::orderBy('id_pro', 'desc')->paginate(16);
    $category = categoryModel::get();
    return view('admin.adminListProduct')->with([
      'productList' => $product,
      'category' =>   $category
    ]);
  }
  public function show(Request $request)
  {
    $id = $request->id;
    $GetProduct = productModel::find($id);
    $category = categoryModel::get();
    return $GetProduct;
  }
  public function create(Request $request)
  {
    $request->validate([
      'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
    ]);
    $name = time() . '.' . $request->file('image')->extension();
    $request->file('image')->move(public_path('layout/Img'), $name);
    productModel::create([
      'id_Cate' => $request->category,
      'name_pro' => $request->Name,
      'price_old' => $request->price,
      'soluong' => $request->Soluong,
      'chieucao' => $request->size,
      'xuatsu' => $request->madein,
      'noibat' => $request->noibat,
      'mieuta' => $request->description,
      'image' => $name
    ]);
    return redirect()->back()->with('messeger', 'Thêm sản phẩm thành công');
  }
  public function update(Request $request)
  {
    $id = $request->id;
    $GetProduct = productModel::find($id);
    if ($GetProduct) {
      if ($request->file('Editimage')) {
        $request->validate([
          'Editimage' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);
        $name = time() . '.' . $request->file('Editimage')->extension();
        $request->file('Editimage')->move(public_path('layout/Img'), $name);
        $GetProduct->name_pro = $request->EditName;
        $GetProduct->id_Cate = $request->Editcategory;
        $GetProduct->price_old = $request->priceOld;
        $GetProduct->price_new = $request->priceNew;
        $GetProduct->mieuta = $request->EditDescription;
        $GetProduct->chieucao = $request->Editsize;
        $GetProduct->image =  $name;
        $GetProduct->xuatsu = $request->Editmadein;
        $GetProduct->soluong = $request->Soluong;
        $GetProduct->noibat = $request->noibat;
        $GetProduct->save();
        return redirect()->back()->with('messeger', 'Sửa thành công');
      } else {
        $GetProduct->name_pro = $request->EditName;
        $GetProduct->id_Cate = $request->Editcategory;
        $GetProduct->price_old = $request->priceOld;
        $GetProduct->price_new = $request->priceNew;
        $GetProduct->mieuta = $request->EditDescription;
        $GetProduct->chieucao = $request->Editsize;
        $GetProduct->xuatsu = $request->Editmadein;
        $GetProduct->soluong = $request->Soluong;
        $GetProduct->noibat = $request->noibat;
        $GetProduct->save();
        return redirect()->back()->with('messeger', 'Sửa thành công');
      }
    }
  }
  public function showAdmin()
  {
    $category = categoryModel::get();
    return view('admin.adminProduct')->with('category', $category);
  }
  public function searchProduct(Request $request)
  {
    $key = $request->search;
    if ($request->ajax()) {
      $products = productModel::where('name_pro', 'LIKE', '%' . $key . '%')->get();
      return response($products);
    }
  }
  public function search(Request $request)
  {
    $key = $request->search;
    $products = productModel::where('name_pro', 'LIKE', '%' . $key . '%')->get();
    return view('resultSearch')->with(['product' => $products, 'key' => $key]);
  }
  public function searchBy(Request $request)
  {
    $action = $request->action;
    switch ($action) {
      case 'getByCate':
        $key = $request->key;
        $cate = $request->value;
        $products = productModel::where('name_pro', 'LIKE', '%' . $key . '%')->where('id_Cate', $cate)->get();
        return response()->json($products);
      case 'getByBuy':
        $key = $request->key;
        $productOder = OrderModel::get();
        $arr = [];
        foreach ($productOder as $productOders) {
          $product = explode(',', $productOders->listId_pr);
          $productQuantity = explode(',', $productOders->quantity);
          for ($i = 0; $i < count($product); $i++) {
            array_push($arr, ['product' => $product[$i], 'value' => $productQuantity[$i]]);
          }
        }
        $arrPr = [];
        for ($i = 0; $i < count($arr); $i++) {
          for ($j = $i + 1; $j <  count($arr); $j++) {
            if ($arr[$i]['product'] === $arr[$j]['product']) {
              $arr[$i]['value'] += $arr[$j]['value'];
              array_splice($arr, $j, 1);
              $j--;
            }
          }
        }
        foreach ($arr as $arrs) {
          $pr = productModel::find($arrs['product']);
          $pr['quantity'] = $arrs['value'];
          array_push($arrPr, $pr);
        }
        $result = [];
        foreach ($arrPr as $arrPrs) {
          if (strpos($arrPrs->name_pro, $key) !== false) {
            array_push($result, $arrPrs);
          }
        }
        return  response() -> json($result);
    }
  }
  public function destroy(Request $request)
  {
    $id = $request->id;
    if(imageProductModel::find($id) !== null){
        imageProductModel::find($id)->delete();
        commentDPModel::where('id_pro', $id)->delete();
        productModel::find($id)->delete();
    }
    commentDPModel::where('id_pro', $id)->delete();
    productModel::find($id)->delete();
  }
  public function actionImg(Request $request)
  {
    $id = $request->id;
    $img = imageProductModel::find($id);
    if ($img !== null) {
      if ($request->file('Editimage1')) {
        $request->validate([
          'Editimage1' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);
        $name1 = time() + 1 . '.' . $request->file('Editimage1')->extension();
        $request->file('Editimage1')->move(public_path('layout/Img'), $name1);
        $img->img1 = $name1;
        $img->save();
      }
      if ($request->file('Editimage2')) {
        $request->validate([
          'Editimage2' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);
        $name1 = time() + 2 . '.' . $request->file('Editimage2')->extension();
        $request->file('Editimage2')->move(public_path('layout/Img'), $name1);
        $img->img2 = $name1;
        $img->save();
      }
      if ($request->file('Editimage3')) {
        $request->validate([
          'Editimage3' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048'
        ]);
        $name1 = time() + 3 . '.' . $request->file('Editimage3')->extension();
        $request->file('Editimage3')->move(public_path('layout/Img'), $name1);
        $img->img3 = $name1;
        $img->save();
      }
      if ($request->file('Editimage1') && $request->file('Editimage2') && $request->file('Editimage3')) {
        $request->validate([
          'Editimage1' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
          'Editimage2' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
          'Editimage3' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048'
        ]);
        $name1 = time() + 1 . '.' . $request->file('Editimage1')->extension();

        $name2 = time() + 2 . '.' . $request->file('Editimage2')->extension();

        $name3 = time() + 3 . '.' . $request->file('Editimage3')->extension();

        $request->file('Editimage1')->move(public_path('layout/Img'), $name1);

        $request->file('Editimage2')->move(public_path('layout/Img'), $name2);

        $request->file('Editimage3')->move(public_path('layout/Img'), $name3);

        $img->img1 = $name1;
        $img->img2 = $name2;
        $img->img3 = $name3;
        $img->save();
      }
      return redirect()->back()->with('messeger', 'update hình sản phẩm thành công');
    } else {
      $request->validate([
        'Editimage1' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        'Editimage2' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        'Editimage3' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048'
      ]);
      $name1 = time() + 1 . '.' . $request->file('Editimage1')->extension();
      $name2 = time() + 2 . '.' . $request->file('Editimage2')->extension();
      $name3 = time() + 3 . '.' . $request->file('Editimage3')->extension();
      $request->file('Editimage1')->move(public_path('layout/Img'), $name1);
      $request->file('Editimage2')->move(public_path('layout/Img'), $name2);
      $request->file('Editimage3')->move(public_path('layout/Img'), $name3);

      imageProductModel::create([
        'id_img' => $id,
        'img1' => $name1,
        'img2' => $name2,
        'img3' => $name3
      ]);
      return redirect()->back()->with('messeger', 'thêm hình sản phẩm thành công');
    }
  }
  public function productImg(Request $request)
  {
    $id = $request->id;
    $img = imageProductModel::find($id);
    return $img;
  }
}
