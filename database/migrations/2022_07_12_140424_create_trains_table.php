<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // definisco il nome delle colonne della nuova tabella e il tipo di dato che le andrà a popolare
        // avvio la migration che crea le colonne della mia tabella con comando terminale 'php artisan migrate'
        // con comando terminale 'php artisan make:migration add_nome_colonna_column_nome_tabella_table --table=nome_tabella' aggiungo una nuova colonna
        // con comando terminale 'php artisan make:model NomeTabellaAlSingolare' creo un Model che interagirà con il db
        // con comando terminale 'php artisan make:seeder NomeTabella(in Pascal Case)TableSeeder' creo un file seeder attraverso cui potrò popolare la mia tabella

        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('company', 30);
            $table->string('departure_station', 50);
            $table->string('arrival_station', 50);
            $table->date('departure_date');
            $table->date('arrival_date');
            $table->time('departure_time');
            $table->time('arrival_time');
            $table->string('train_code', 6);
            $table->unsignedTinyInteger('wagons_number');
            $table->boolean('is_in_time');
            $table->boolean('is_deleted');
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trains');
    }
}
