<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // Importe a classe DB aqui

class SeriesController extends Controller
{
    public function index()
    {
        $series = DB::select('SELECT nome FROM series;');
        // temos a função DUMP and DIE
        // dd($series);

        // a separação de diretórios é feita com o "."
       return view('series.index') -> with ('series', $series);
    }

    public function create()
    {
      return view('series.create');
    }

    public function store(Request $request)
    {
      $nomeSerie = $request->input('nome');
      // no DB temos algumas informações de banco de dados
      if(DB::insert('INSERT INTO series (nome) VALUES (?)', [$nomeSerie])) {
        return "OK";
      } else {
        return "DEU ERRO";
      }

    }
}
