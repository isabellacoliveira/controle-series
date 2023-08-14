<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Serie;
use Illuminate\Support\Facades\DB; // Importe a classe DB aqui

class SeriesController extends Controller
{
    public function index()
    {
        // vamos buscar series utilizando a Model
        $series = Serie::all();

        // $series = DB::select('SELECT nome FROM series;');
        // temos a função DUMP and DIE

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
    //   DB::insert('INSERT INTO series (nome) VALUES (?)', [$nomeSerie]);
    $serie = new Serie();
    $serie->nome = $nomeSerie;
    $serie->save();

      return redirect('/series');
    }
}
