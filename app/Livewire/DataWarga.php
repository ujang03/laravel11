<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class DataWarga extends Component
{

    public $statusEdit = true;
    public $id, $name, $address, $gender, $religion, $job, $blood_type, $familly_card_url;

    public function save()
    {
        dd($this->blood_type);
    }
    public function render()
    {
        $dataWarga = User::with('profile')->get();

        return view('livewire.data-warga', compact('dataWarga'));
    }
}
