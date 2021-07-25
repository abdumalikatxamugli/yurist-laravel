<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientContract extends Model
{
    use HasFactory;
    public $table='client_contracts';
    public $timestamps=false;
    protected $fillable = [
            'IDPERSON',
            'LASTNAME',
            'FIRSTNAME',
            'PATRONYMIC',
            'DOCNUM',
            'SEX',
            'BIRTHDAY',
            'STARTDATE',
            'EXPDATE',
            'SROK',
            'PLATEJ',
            'STARTAMOUNT',
            'CARD',
            'SUMTRANS',
            'PAYMENTDAY',
            'ACCBAL',
            'ACC1BAL',
            'ACC4BAL',
            'IDMPCARTGOODS',
            'EXTGOODSNAME',
            'EXTGOODSID',
            'PRICE',
            'ORGNAMESHORT',
            'IDORGDATA',
            'ORGNAMESHORT2',
            'USERNAME',
            'EXPIRY_RANGE',
            'ADDRESS'
    ];
}
