<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CertificateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Certificate $Certificate)
    {
        // $Certificate = Certificate::latest()->paginate(20);
        // return view('certificates.index', compact('Certificate'))->with('i', (request()->input('page', 1) - 1) * 20);
        // $Certificate = Certificate::latest();
        // if(request('search')){
        //    $Certificate->where('number','like','%' . request('search') . '%');
        // }
        return view('certificates.index',[
            'certificates' => Certificate::latest()->paginate(20)
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('certificates.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $storeData = $request->validate([
            'name' => 'required|max:255',
            'as' => 'required|max:255',
            'number' => 'required|numeric',
            'date' => 'required|max:255',
            'description' => 'max:255',
            'status' => 'max:255',
        ]);
        Certificate::create($request->all());
        return redirect()->route('certificates.index')->with('success','Created Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('certificates.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Certificate $Certificate)
    {
        return view('certificates.edit', compact('Certificate'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Certificate $Certificate)
    {
        $updateData = $request->validate([
            'name' => 'required|max:255',
            'as' => 'required|max:255',
            'number' => 'required|numeric',
            'date' => 'required|max:255',
            'description' => 'max:255',
            'status' => 'max:255',
        ]);

        $Certificate->update($request->all());
        return redirect()->route('certificates.index')->with('success','Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Certificate $Certificate)
    {
        $Certificate->delete();
        return redirect()->route('certificates.index')->with('success', 'Certificates has been deleted');
    }
    public function search(Request $request, Certificate $Certificate)
	{
        $Certificate = Certificate::where([
            ['number', '!=', NULL],
            [function ($query) use ($request) {
                if (($search = $request->search)) {
                    $query->orWhere('number', 'like', '%' . $search . '%');
                }
            }]
        ]);
    		// mengirim data Certificate ke view index
		return view('index',['Certificate' => $Certificate]);
 
	}

}
