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
}
