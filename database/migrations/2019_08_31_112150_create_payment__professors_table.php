<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentProfessorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment__professors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->dateTime('date');
            $table->double('amount');
            $table->integer('formation_id')->nullable();
            $table->integer('professor_id')->unsigned();
            $table->string('des')->nullable();
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
        Schema::dropIfExists('payment__professors');
    }
}
