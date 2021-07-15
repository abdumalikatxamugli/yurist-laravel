<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use SimpleXLSX;
use App\Jobs\ImportExcelJob;

class ImporterController extends Controller{
    public function upload(Request $request){
        if($request->method()=='GET'){
            return view('uploader');
        }
        
        $file_path=$request->file('file-upload-input')->storeAs('xls',
            time().$request->file('file-upload-input')->getClientOriginalName() . '.' . $request->file('file-upload-input')->getClientOriginalExtension()
        );

        return redirect()->route('xlsx.importer',['file_path'=>$file_path]);
       
    }
   
    public function importer(Request $request){
       
        if($request->method()=='GET'){
            return view('uploader',['file_path'=>$_GET['file_path']]);
        }
        
        ImportExcelJob::dispatch($request->input('path'));
        print $request->input('path');
        // $xls=new SimpleXLSX(storage_path("app/".$request->input('path')));
        // if($xls->success()){
        //     $rows=$xls->rows();
        //     dd($rows);
        // }    
    }
}
