<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        return view('pages.home');
    }
}



//public function addBook(){
 //   return view('pages.add-book');
//}


 //   if(request()->hasFile('logo')) {
 //       $path = $request->file('logo')->store('public/images');
  //      $fileName = str_replace('public/', '', $path);
  //  }
