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
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('comp_name');
            $table->longText('address');
            $table->string('contact_person');
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
            $table->date('dateOfVisit2')->nullable(true);
           $table->string('purposeVisit2')->nullable(true);
            $table->longText('remarks2')->nullable(true);
            $table->date('dateOfVisit3')->nullable(true);
            $table->string('purposeVisit3')->nullable(true);
            $table->longText('remarks3')->nullable(true);
            $table->date('dateOfVisit4')->nullable(true);
            $table->string('purposeVisit4')->nullable(true);
            $table->longText('remarks4')->nullable(true);
            $table->date('dateOfVisit5')->nullable(true);
            $table->string('purposeVisit5')->nullable(true);
            $table->longText('remarks5')->nullable(true);
            $table->date('dateOfVisit6')->nullable(true);
            $table->string('purposeVisit6')->nullable(true);
            $table->longText('remarks6')->nullable(true);
            $table->date('dateOfVisit7')->nullable(true);
            $table->string('purposeVisit7')->nullable(true);
            $table->longText('remarks7')->nullable(true);
            $table->date('dateOfVisit8')->nullable(true);
            $table->string('purposeVisit8')->nullable(true);
            $table->longText('remarks8')->nullable(true);
            $table->longText('remarks9')->nullable(true);
            $table->string('status')->nullable(true);
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
