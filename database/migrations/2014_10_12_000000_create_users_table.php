<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('school_id');
            $table->string('nip');
            $table->string('name');
            $table->string('phone');
            $table->string('email')->unique();
            $table->string('gender');
            $table->bigInteger('role_id');
            $table->timestamp('work_hour_start')->nullable();
            $table->timestamp('work_hour_end')->nullable();
            $table->string('photo');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
