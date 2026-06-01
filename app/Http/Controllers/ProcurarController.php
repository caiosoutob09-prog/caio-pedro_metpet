<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProcurarController extends Controller
{
   public function procurar(Request $request)
   {
      return view('procurar');
   }
}
