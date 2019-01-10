<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCorporatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('corporates', function (Blueprint $table) {
            $table->increments('id');
            $table->string('project_name');
            $table->text('mailing_address');
            $table->string('phone_number');
            $table->string('email_address');
            $table->string('website')->nullable();
            $table->text('office_address');
            $table->string('contact_person');
            $table->string('year_founded');
            $table->text('vision_mission');
            $table->text('activities');
            $table->text('challenges');
            $table->text('expections');
            $table->string('document')->nullable();
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
        Schema::dropIfExists('corporates');
    }
}
