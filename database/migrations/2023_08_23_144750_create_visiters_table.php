<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visiters', function (Blueprint $table) {
            $table->id();
            $table->string("name")->nullable(false);
            $table->string("date_view")->nullable(false);
            $table->string("email")->nullable(false);
            $table->string("localisation")->nullable(false);
            $table->integer("periode")->nullable(false);
            $table->integer("tel")->nullable(false);

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
        Schema::dropIfExists('visiters');
    }
};
