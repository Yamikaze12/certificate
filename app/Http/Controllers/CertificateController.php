<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use App\Models\Courses;
use App\Exports\CertificateExport;
use App\Imports\CertificateImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class CertificateController extends Controller
{
    public function addCertificate()
    {
        return view('add-certificate');
    }

    public function createCertificate(Request $request)
    {
        $certificate = new certificate();
        $certificate->number = $request->number;
        $certificate->name =$request->name;
        $certificate->as = $request->as;
        $certificate->date = $request->date;
        $certificate->description = $request->description;
        $certificate->status = $request->status;
        $certificate->save();
        return redirect('/add-certificate');
    }

    public function getCertificate()
    {
        $certificates = Certificate::orderBy('id','DESC')->paginate(20);
        return view('certificates',compact('certificates'));
    }

    public function deleteCertificate($id)
    {
        Certificate::where('id',$id)->delete();
        return back()->with('Certificate_Deleted','Certificate details has been deleted successfully');
    }

    public function editCertificate($id)
    {
        $certificate = Certificate::find($id);
        return view('edit-certificate',compact('certificate'));
    }

    public function updateCertificate(Request $request)
    {
        $certificate = Certificate::find($request->id);
            $certificate->number = $request->number;
            $certificate->name =$request->name;
            $certificate->as = $request->as;
            $certificate->date = $request->date;
            $certificate->description = $request->description;
            $certificate->status = $request->status;
            $certificate->save();
            return redirect('/admin');
    }

    public function adminSearch(Request $request)
    {
        $certificates = Certificate::where('number','=',($request->search))->orWhere('name','=',($request->search)) ->paginate(10);
        return view('certificates',compact('certificates'));
    }

    public function search(Request $request)
    {
        if ($request->search == null) {
            return view('/verify');
        }
        $certificate = Certificate::join('courses', 'certificates.number', '=', 'certificates.number')->where('number','=',($request->search))->paginate(1);
        return view('verify',['certificates'=>$certificate]);
    }

    

    public function importExportView()
    {
       return view('imports-exports');
    }

    public function export() 
    {
        return Excel::download(new CertificateExport, 'certificates.xlsx');
    }

    public function import()
    {
        Excel::import(new CertificateImport,request()->file('file'));
        return redirect ('/admin');
    }

}
