<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tender;
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
        $data= Tender::where("agent",$request->agency)->get();
        return view('tenderResult',['tenders'=>$data]);
    }
}
