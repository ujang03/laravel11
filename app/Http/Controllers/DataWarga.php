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
        $dataWarga = User::with('profile')->find($id);
        return response()->json(['status' => 200, 'warga' => $dataWarga]);
    }
}
