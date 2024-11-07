<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DataWarga extends Controller
{
    protected $rules = [
        'name' => 'required',
        'address' => 'required',
        'gender' => 'required',
        'religion' => 'required',
        'job' => 'required',
        'blood_type' => 'required',
    ];

    public function index()
    {
        // $dataWarga = User::Join('user_profiles', 'user_profiles.user_id', '=', 'users.id')->select('users.*', 'user_profiles.*')->get();
        $dataWarga = User::with('profile')->get();
        // dd($dataWarga);

        return view('admin.data_warga.index', compact('dataWarga'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $validated = $request->validate($this->rules);

        $user = User::create($validated);
        $user->profile()->create($validated);

        return redirect()->route('data-warga.index');
    }

    public function edit($id)
    {
        $item = User::with('profile')->find($id);
        return view('admin.data_warga.edit', compact('item'));
    }

    public function delete($id)
    {
        $dataWarga = User::find($id);
        $dataWarga->profile()->delete();
        $dataWarga->delete();
        return redirect()->route('data-warga.index');
    }

    public function update(Request $request, $id)
    {

        $dataWarga = User::with('profile')->find($id);
        $validated = $request->validate($this->rules);
        $dataWarga->update($validated);
        $dataWarga->profile()->update([
            'address' => $request->address,
            'gender' => $request->gender,
            'religion' => $request->religion,
            'job' => $request->job,
            'blood_type' => $request->blood_type,
        ]);
        return redirect()->route('data-warga.index');
    }
}
