<?php

use Illuminate\Database\Seeder;

// importo la libreria FakerPHP per inserire dati fake in tabella
use Faker\Generator as Faker;

// importo il Model pertinente per poter inserire i dati nella relativa tabella
use App\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    //  inietto la libreria Faker come argomento del metodo run() (dependency injection) per poterla utilizzare
    public function run(Faker $faker)
    {
        // creo un array con le compagnie dei treni
        $companies = ['Italo', 'TreNord', 'Trenitalia'];

        // creo una variabile in cui salverò la Classe del Modello Train
        $newTrain = new Train();

        // da qui in poi metteremo tutte le colonne

        // inserimento manuale
        $newTrain->type= 'intercity';
        $newTrain->wagons_number = rand(2, 100);

        // inserimento con opzioni in array
        $newTrain->company =$companies[rand(0, count($companies) - 1)];
        
        // da libreria FakerPHP
        $newTrain->departure_station = $faker->city();
        $newTrain->arrival_station = $faker->city();
        $newTrain->departure_date = $faker->dateTimeThisMonth();
        $newTrain->arrival_date = $faker->dateTimeThisMonth();
        $newTrain->departure_time = $faker->time();
        $newTrain->arrival_time = $faker->time();
        $newTrain->train_code = $faker->bothify('?-####');
        $newTrain->is_in_time = $faker->boolean();
        $newTrain->is_deleted = $faker->boolean();

        //prima di uscire dal metodo salvo il nuovo treno attraverso il metodo 'save()'
        $newTrain->save();

        // con comando terminale 'php artisan db:seed --class=NomeTabella(in Pascal Case)TableSeeder' lancio il seeder appena creato che popolerà la mia tabella

    }
}
