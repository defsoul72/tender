<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Support\Facades\DB;
use Session;
class ProductController extends Controller
{
    //
    function index()
    {
        $data= Product::all();

        return view('product',['products'=>$data]);
    }
    function detail($id)
    {
        $data=Product::find($id);
        return view('detail',['product'=>$data]);
    }
    function search(Request $req)
    {
        $data= Product::
        where('name','like','%'.$req->input('query').'%')
        ->get();
        return view('search',['products'=>$data]);
    }
    function addToCart(Request $req)
    {
        if($req->session()->has('user'))
        {
            $cart= new Cart;
            $cart->user_id=$req->session()->get('user')['id'];
            $cart->product_id=$req->product_id;
            $cart->save();
            return redirect('/');
        }
        elseif($req->session()->has('admin'))
        {
            $cart= new Cart;
            $cart->user_id=$req->session()->get('admin')['id'];
            $cart->product_id=$req->product_id;
            $cart->save();
            return redirect('/');
        }
        else 
        {
            return redirect('/login');
        }
    }
     static function cartItem()
        {
            $userId=Session::get('user')['id'];
            return Cart::where('user_id',$userId)->count();
        }
    function about_us()
    {
        return redirect('/about_us');
    }
    function add_tender(Request $req)
    {
        $product= new Product;
        $product->no_tender=$req->no_tender;
        $product->name=$req->name;
        $product->publish_date=$req->publish_date;
        $product->closing_date=$req->closing_date;
        $product->agent=$req->agent;
        $product->description=$req->description;
        $product->kod_bidang=$req->kod_bidang;
        $product->save();
        return redirect('/');
    }
    function list_tender()
    {
        $data= Product::all();
        return view('list_tender',['products'=>$data]);
    }
    function delete_tender($id)
    {
        DB::delete('delete from products where id = ?',[$id]);
        return redirect('/list_tender');
    }
    function update_tender(Request $req,$id)
    {
        //dd("$products");
        $no_tender = $req->input('no_tender');
        $name = $req->input('name');
        $publish_date = $req->input('publish_date');
        $closing_date = $req->input('closing_date');
        $agent = $req->input('agent');
        $description= $req->input('description');
        $kod_bidang = $req->input('kod_bidang');

        DB::update('update products set no_tender = ?,name=?,publish_date = ?,closing_date = ?,agent = ?, 
        description = ?, kod_bidang = ? where id = ?',
        [$no_tender,$name,$publish_date, $closing_date,$agent, $description, $kod_bidang, $id]);
        return redirect('/list_tender');
    }
    // function update_show(Product $id)
    // {
    //     //dd($id);
    //     $data= Product::where('no_tender',$id)->get();
    //     dd($data);
    //     return view('update_tender',['products'=>$data]);
    // }
    // public function update_show(Product $products,$id)
    // {
    //     $id = (int)$id;
    //     $data = Product::find($id);
    //     //dd(gettype($data->publish_date));
    //     //dd(gettype($id));
    //     //dd($data);
    //     return view('update_tender',['products'=>$data]);
    // }
}