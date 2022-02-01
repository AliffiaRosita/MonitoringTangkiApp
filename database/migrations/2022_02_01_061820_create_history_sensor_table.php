<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistorySensorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('history_sensor', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->double('tinggi', 15, 8);
            $table->double('volume', 15, 8);
            $table->foreignId('id_sensor')->constrained('sensor')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('id_tangki')->constrained('tangki')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('history_sensor');
    }
}
