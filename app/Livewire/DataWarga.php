<?php

namespace App\Livewire;

use App\Models\User;
use App\Models\UserProfile;
use Livewire\Component;

class DataWarga extends Component
{

    public $updateData = false;
    public $userId, $name, $address, $gender, $religion, $job, $blood_type, $familly_card_url;

    protected $rules = [
        'name' => 'required',
        'address' => 'required',
        'gender' => 'required',
        'religion' => 'required',
        'job' => 'required',
        'blood_type' => 'required',
    ];

    protected $messages = [
        'name.required' => 'Name is required',
        'address.required' => 'Email is required',
        'gender.required' => 'Gender is required',
        'religion.required' => 'Religion is required',
        'job.required' => 'Job is required',
        'blood_type.required' => 'Blood type is required',
    ];

    public function save()
    {
        $validated = $this->validate($this->rules, $this->messages);

        $user =  User::create($validated);
        $user->profile()->create($validated);
        $this->reset();
        $this->dispatch('close-modal');
    }

    public function render()
    {
        $dataWarga = User::with('profile')->get();

        return view('livewire.data-warga', compact('dataWarga'));
    }
}
