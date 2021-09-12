<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSingleEventTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('single_event', function (Blueprint $table) {
            $table->id();
            $table->string('single_event_terbaik_ajang');
            $table->string('single_event_terbaik_no_pertandingan');
            $table->string('single_event_terbaik_tahun');
            $table->string('single_event_terbaik_tempat');
            $table->string('atlet_id');
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
        Schema::dropIfExists('single_event');
    }
}
