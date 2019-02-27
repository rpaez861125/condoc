<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('graduated');
            $table->integer('no_registration');
            $table->string('ci', 11);
            $table->string('name');
            $table->string('last_name');
            $table->string('size');
            $table->float('weight', 8, 2);
            $table->integer('age');
            $table->char('sex', 1);
            $table->string('skin_color', 10);
            $table->string('hair_color');
            $table->string('eye_color');
            $table->string('social_origin_father');
            $table->string('social_origin_mother');
            $table->string('address');
            $table->integer('attention_area');
            $table->tinyInteger('internal');
            $table->tinyInteger('low');
            $table->integer('group_id')->unsigned();
            $table->integer('cours_id')->unsigned();
            $table->integer('popularcouncil_id')->unsigned();

            $table->foreign('group_id')->references('id')->on('groups');
            $table->foreign('cours_id')->references('id')->on('courses');
            $table->foreign('popularcouncil_id')->references('id')->on('popularcouncils');

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
        Schema::dropIfExists('students');
    }
}
