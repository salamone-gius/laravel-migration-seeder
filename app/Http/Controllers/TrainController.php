<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// importo il Model pertinente per poter inserire i dati nella relativa tabella
use App\Train;

class TrainController extends Controller
{
    // creo il metodo che mi restituirà la view e i dati db
    public function index() {

        // stampo tutti gli elementi
        $trains = Train::all();

        return view('home', compact('trains'));
    }
}
