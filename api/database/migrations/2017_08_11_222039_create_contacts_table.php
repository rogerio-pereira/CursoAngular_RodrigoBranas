<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('telefone')->unique();
            $table->date('data')->nullable();
            $table->string('cor')->nullable();
            $table->integer('operator_id')->unsigned();
            $table->timestamps();

            $table->foreign('operator_id')
                ->references('id')
                ->on('operators');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}
