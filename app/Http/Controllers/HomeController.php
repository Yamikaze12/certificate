<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Certificate;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Spatie\Searchable\Search;

class HomeController extends Controller
{
    public function index(Request $request, Certificate $Certificate)
    {
        // if(request($search)){
        //     // $Certificate = Certificate::where(function($q) use ($search){
        //         $Certificate->where('number', 'LIKE', '%'. $search .'%');
        //     }

        return view('index', ['Certificate' => $Certificate, 
                            "Certificate" => Certificate::latest()->filter(request('search'))->get()]);
    }
}
