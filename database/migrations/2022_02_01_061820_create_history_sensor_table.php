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
            $table->double('tinggi', 15, 8);
            $table->double('volume', 15, 8);
            $table->foreignId('sensor_id')->constrained('sensor')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('tangki_id')->constrained('tangki')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('history_sensor');
    }
}
