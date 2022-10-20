<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Certificate;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    public function index(Request $request, Certificate $Certificate)
    {
        // if(request($search)){
        //     // $Certificate = Certificate::where(function($q) use ($search){
        //         $Certificate->where('number', 'LIKE', '%'. $search .'%');
        //     }

        // return view('index', ['Certificate' => $Certificate, 
        //                     "Certificate" => Certificate::filter(request('search'))->latest()->get()]);
        $Certificate = Certificate::latest();
        return view('index', ['Certificate' => $Certificate, 
                                "Certificate" => Certificate::where('number', '=', request('search'))->first()]);                   
    }


}
