<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEncountersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('encounters', function (Blueprint $table) {
            $table->id();
            $table->string('label');
            $table->unsignedInteger('attempt_id');
            $table->unsignedDecimal('pokemon_id', 6, 2)->nullable();
            $table->string('comment')->default('');
            $table->string('nickname')->default('');
            $table->string('epitath')->nullable();
            $table->string('nature')->nullable();
            $table->string('status')->default('Encounter Available');
            $table->timestamps();

            $table->foreign('attempt_id')->references('id')->on('attempts')->onDelete('cascade');
            $table->foreign('pokemon_id')->references('id')->on('pokemon')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('encounters');
    }
}
