<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use Illuminate\Http\Request;

class CertificateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Certificate = Certificate::all();
        return view(route('certificates.index'), compact('Certificate'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/resources.create');
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
        $Certificate = Certificate::create($storeData);
        return redirect('/certificates')->with('completed', 'Certificates has been saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Certificate $certificate)
    {

        return view('/resources.edit', compact('certificate'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $updateData = $request->validate([
            'name' => 'required|max:255',
            'as' => 'required|max:255',
            'number' => 'required|numeric',
            'date' => 'required|max:255',
            'description' => 'max:255',
            'status' => 'max:255',
        ]);
        Certificate::whereId($id)->update($updateData);
        return redirect('/certificates')->with('completed', 'Certificates has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Certificate = Certificate::findOrFail($id);
        $Certificate->delete();
        return redirect('/certificates')->with('completed', 'Certificates has been deleted');
    }

    public function filter(Request  $request)
    {
        $Certificate = Certificate::query();

        $name = $request->name;
        $number = $request->number;

        if ($name) {
            $users->where('name','LIKE','%'.$name.'%');
        }
        if ($number) {
            $number->where('number','LIKE','%'.$number.'%');
        }

        $data = [
            'name' => $name,
            'number' => $number,
            'Certificate' => $Certificate->latest()->simplePaginate(10),
        ];
        return view('Certificate',$Certificate);
    }
}
