<?php

namespace App\Imports;

use App\Models\ClientContract;
use Maatwebsite\Excel\Concerns\ToModel;

class ClientContractImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        
        return new ClientContract([
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
    }
}