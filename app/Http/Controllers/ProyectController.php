<?php

namespace App\Http\Controllers;

use App\Models\DatoEntrante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataController extends Controller
{
    public function store(Request $request)
    {
        $data1 = $request->input('data1');
        $data2 = $request->input('data2');

        DB::table('data')->insert([
            'data1' => $data1,
            'data2' => $data2,
        ]);

        return response()->json(['message' => 'Data stored successfully']);
    }
}
