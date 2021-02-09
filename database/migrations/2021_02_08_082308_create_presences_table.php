<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePresencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('presences', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_user');
            $table->timestamp('time_start')->nullable();
            $table->timestamp('time_end')->nullable();
            $table->string('lat_start');
            $table->string('long_start');
            $table->string('lat_end');
            $table->string('long_end');
            $table->boolean('at_school_start');
            $table->boolean('at_school_end');
            $table->enum('status_start', ['early', 'late']);
            $table->enum('status_end', ['early', 'late']);
            $table->string('note');
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
        Schema::dropIfExists('presences');
    }
}
