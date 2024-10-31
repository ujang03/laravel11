<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DataWarga extends Controller
{
    public function index()
    {
        $dataWarga = User::Join('user_profiles', 'user_profiles.user_id', '=', 'users.id')->select('users.*', 'user_profiles.*')->get();
        dd($dataWarga);

        return view('admin.data_warga.index', compact('dataWarga'));
    }
}
