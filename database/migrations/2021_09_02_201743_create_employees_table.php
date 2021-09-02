<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('name', 80);
            $table->string('paternal_surname', 80);
            $table->string('email')->unique();
            $table->string('phone', 10)->nullable();
            $table->integer('company_id')->unsigned()->index();

            $table->foreign('company_id')->references('id')->on('companies');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
