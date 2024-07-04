<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Train;

class PageController extends Controller
{
    public function home()
    {

        // Documentazione: https://laravel.com/docs/10.x/eloquent#retrieving-models
        $train = Train::all(); //per prendere tutti i dati, inalterati

        // Altri esempi:
        // metodo equivalente (prende tutto) ma permette di aggiungere altri parametri
        // $studenti = Student::get();

        // ad esempio, prendo solo i primi 10 risultati
        // $studenti = Student::take(10)->get();

        // ad esempio, prendo tutti ma ordino per nome
        // $studenti = Student::orderBy("name")->get();

        // ad esempio, prendo i primi 10 ma in ordine di nome
        // $studenti = Student::take(10)->orderBy("name")->get();

        $dati = [
            "treni" => $train
        ];

        return view('home', $dati);
    }

    // public function metodo() {
    //     $dati = config("nomeFileDaConfig");
    //     return view('nomeFileDellaVista', $dati);
    // }
}
