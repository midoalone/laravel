<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\book;
class borrowcontroller extends Controller
{
    //

    public function borrow(){
        $students = Students::all();
        return view('library.borrow', compact('students'));
    }
}
