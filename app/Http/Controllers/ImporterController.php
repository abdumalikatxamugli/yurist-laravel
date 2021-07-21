<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use App\Models\ClientContract;
use SimpleXLSX;
use PDF;

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
        ini_set('memory_limit', '-1');
        $excel=SimpleXLSX::parseFile(storage_path("app/".$request->input('path')));
        $index=0;
        foreach($excel->rows() as $row){
            
            if($index>1000){
             
                break;
            }
            $check=ClientContract::where([
                'IDPERSON'=>$row[0]
            ])->first();
            if($check){
               
                continue;
            }
            $contract=new ClientContract([
                'IDPERSON' => $row[0],
                'LASTNAME' => $row[1],
                'FIRSTNAME' => $row[2],
                'PATRONYMIC' => $row[3],
                'DOCNUM' => $row[4],
                'SEX' => $row[5],
                'BIRTHDAY' => $row[6],
                'STARTDATE' => $row[7],
                'EXPDATE' => $row[8],
                'SROK' => $row[9],
                'PLATEJ' => $row[10],
                'STARTAMOUNT' => $row[11],
                'CARD' => $row[12],
                'SUMTRANS' => $row[13],
                'PAYMENTDAY' => $row[14],
                'ACCBAL' => $row[15],
                'ACC1BAL' => $row[16],
                'ACC4BAL' => $row[17],
                'IDMPCARTGOODS' => $row[18],
                'EXTGOODSNAME' => $row[19],
                'EXTGOODSID' => $row[20],
                'PRICE' => $row[21],
                'ORGNAMESHORT' => $row[22],
                'IDORGDATA' => $row[23],
                'ORGNAMESHORT2' => $row[24],
                'USERNAME' => $row[25],
                'EXPIRY_RANGE' => $row[26]
            ]);
            $contract->save();
            $index++;
        }
        unlink(storage_path("app/".$request->input('path')));
        return redirect()->route("watcher");
    }
    public function watcher(){
        return view('watcher');
    }
    public function show(){
       return view('data');
    }
    public function address(Request $req){
        $data['contract']=ClientContract::where('IDPERSON', $req->id)->first();
        return view('address', $data);
    }
    public function pdf(Request $request){
        $data['contract']=ClientContract::where('IDPERSON', $request->id)->first();
        $data['address']=$request->input('address');
        $pdf = PDF::loadView('letter', $data);

         return $pdf->stream('mail.pdf');
    }
}
