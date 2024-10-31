<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DataWarga extends Controller
{
    public function index()
    {
        $dataWarga = User::all();

        return view('admin.data_warga.index', compact('dataWarga'));
    }
}
