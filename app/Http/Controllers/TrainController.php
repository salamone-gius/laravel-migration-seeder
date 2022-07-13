<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// importo il Model pertinente per poter inserire i dati nella relativa tabella
use App\Train;

class TrainController extends Controller
{
    // creo il metodo che mi restituirà la view e i dati db
    public function index() {

        // stampo i treni in partenza oggi:
        // - con 'where' (query builder) creo la query: primo paramentro = per quale colonna devo filtrare; secondo paramentro = operatore relazionale (qui è sottintenso quello di uguaglianza); terzo parametro = metodo date(formattato così sennò aggiunge anche l'orario) che restituisce ora e data odierni;
        // - metodo get() obbligatorio
        $trains = Train::where('departure_date', date('Y-m-d'))->get();

        return view('home', compact('trains'));
    }
}
