<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tender;
use Illuminate\Support\Facades\DB;

class TenderController extends Controller
{
    //
    function index()
    {
        $data= Tender::all();

        return view('product',['tenders'=>$data]);
    }
    function findTender()
    {

        return view('findTender');
    }
    function displayResult(Request $request){
        $data= Tender::where("agent",$request->agency)->where("state",$request->place)->get();
        return view('tenderResult',['tenders'=>$data]);
    }
    function add_tender(Request $req)
    {
        $product= new Tender;
        $product->no_tender=$req->no_tender;
        $product->title=$req->title;
        $product->state=$req->state;
        $product->due_date=$req->due_date;
        $product->agent=$req->agent;
        $product->save();
        return redirect('/');
    }
    function list_tender()
    {
        $data= Tender::all();
        return view('list_tender',['tenders'=>$data]);
    }
    function delete_tender($id)
    {
        DB::delete('delete from tenders where id = ?',[$id]);
        return redirect('/list_tender');
    }
    function update_tender(Request $req)
    {
        //dd("$products");
        $id=$req->tender_id;
        $no_tender = $req->input('no_tender');
        $title = $req->input('title');
        $state = $req->input('state');
        $due_date = $req->input('due_date');
        $agent = $req->input('agent');
        // $description= $req->input('description');
        // $kod_bidang = $req->input('kod_bidang');
        $tender= Tender::find($id);
         $tender->no_tender=$no_tender;
         $tender->title=$title;
         $tender->state=$state;
         $tender->due_date=$due_date;
         $tender->agent=$agent;
         $tender->save();
        return redirect('/list_tender');
    }
    public function update_show(Tender $tenders,$id)
    {
        $id = (int)$id;
        $data = Tender::find($id);
        //dd(gettype($data->publish_date));
        //dd(gettype($id));
        //dd($data);
        return view('update_tender',['tenders'=>$data]);
    }
}
