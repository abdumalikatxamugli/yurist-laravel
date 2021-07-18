<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use App\Jobs\ImportExcelJob;
use App\Models\ClientContract;

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
        
        return redirect()->route("watcher");
    }
    public function watcher(){
        return view('watcher');
    }
    public function show(){
        $data=ClientContract::paginate(10);
        return view('data', ['data'=>$data]);
    }
}
