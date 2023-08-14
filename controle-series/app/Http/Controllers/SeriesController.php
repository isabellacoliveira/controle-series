<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(Request $request)
    {
        $series = [
            'Friends',
            'Um de Nós está mentindo',
            'Éramos Seis'
        ];
        // a separação de diretórios é feita com o "."
       return view('series.index') -> with ('series', $series);

    }
    
    public function create()
    {
      return view('series.create');
    }
}
