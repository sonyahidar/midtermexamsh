<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    function home() {
        return view('pages.index');
    }



    function contact() {
        return view('pages.contact');
    }



    function store(Request $request) {
        $name = $request ->name;

        return redirect()->route('thanks',['name' => $name]);
    }


    function thanks() {
        return view('pages.thankyou');

    }
}
