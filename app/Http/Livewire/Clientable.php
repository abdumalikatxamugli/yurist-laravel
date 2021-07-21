<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\ClientContract;
use Livewire\WithPagination;

class Clientable extends Component
{
    use WithPagination;
    public $IDPERSON;
    public $FIRSTNAME;
    public $LASTNAME;
    public $EXPIRY;


    public function render()
    {
        $data=ClientContract::where('IDPERSON', 'like', "%".$this->IDPERSON."%")
        ->where('FIRSTNAME', 'like',"%".$this->FIRSTNAME."%")
        ->where('LASTNAME', 'like',"%".$this->LASTNAME."%")
        ->where('EXPIRY_RANGE', 'like',"%".$this->EXPIRY."%")
        ->paginate(10);
        return view('livewire.clientable', ['data'=>$data]);
    }
}
