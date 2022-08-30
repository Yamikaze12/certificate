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
        $Certificate = Certificate::all();
        return view('index', ['Certificate' => $Certificate]);
    }
    public function read(Request $request, Certificate $Certificate)
    {
        return 'Search number certificate';
    }

    public function search(Request $request, Certificate $Certificate)
	{
    // $Certificate = Certificate::when($request->search, function ($query) use ($request) {
    //     $query
    //     ->where('number', 'like', "%{$request->search}%");
    // });

    // $Certificate->appends($request->only('search'));

    // return view('index', ['Certificate' => $Certificate]);
        $number = $request->number;
        $result = DB::table('certificates')->where('number', 'like', '%'.$number.'%')->get();
        $c = count($result);

        if($c == 0){
            return '<p>No certificates<p>';
        }else{
            return view('view')->with([
                'Certificate' => $result
            ]);
        }

 	    // $search = $request->search;
        // $Certificate = DB::table('Certificate')
        // ->where('number','like',"%".$search."%");

        // return view('index',['Certificate' => $Certificate]);
 
	}

}
