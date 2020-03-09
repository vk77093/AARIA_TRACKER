<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrackermastersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trackermasters', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->string('comp_name');
            $table->longText('address');
            $table->bigInteger('mobileNum');
            $table->string('designation');
            $table->string('natureBuss');
            $table->date('dateOfVisit');
            $table->string('purposeVisit');
            $table->longText('mom');
            $table->string('visitStatus');
            $table->longText('reviewpoints');
            $table->string('comptbrand');
            $table->longText('Interested');
            $table->string('callProd');
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
        Schema::dropIfExists('trackermasters');
    }
}
