<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class PrintController extends Controller
{
    public function print(int $id)
    {
        $personInfo = DB::table('people')->where('id', $id)->first();
        $educationInfo = DB::table('education')->where('person_id', $id)->get();
        $workInfo = DB::table('work_experiences')->where('person_id', $id)->get();

        return view('print', [
            'personInfo' => $personInfo,
            'educationInfo' => $educationInfo,
            'workInfo' => $workInfo
        ]);
    }
}
