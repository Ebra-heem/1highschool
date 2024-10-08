<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchoolsTable extends Migration
{
    public function up()
    {
        Schema::create('schools', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('short_name');
            $table->text('address');
            $table->string('email');
            $table->string('phone');
            $table->string('code');
            $table->string('logo');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('schools');
    }
}