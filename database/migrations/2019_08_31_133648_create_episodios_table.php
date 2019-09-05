<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEpisodiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('episodios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('numero');
            // $table->string('nm_episodio');
            // $table->string('ds_episodio');
            // $table->time('tempo_duracao');
            $table->integer('temporada_id');

            $table->foreign('temporada_id')
            ->references('id')
            ->on('temporadas');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('episodios');
    }
}
