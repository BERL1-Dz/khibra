<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment__students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('date');
            $table->double('amount');
            $table->integer('formation_id')->nullable();
            $table->integer('student_id')->unsigned();
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
        Schema::dropIfExists('payment__students');
    }
}
