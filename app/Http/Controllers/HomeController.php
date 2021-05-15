<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function main(): View
    {
        $people = Person::orderBy('id','desc')->sortable()->paginate(10);

        return view('home', [
            'people' => $people
        ]);
    }
}
