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
        Schema::create('termekek', function (Blueprint $table) {
            $table->id("tid");
            $table->string("nev",200);
            $table->integer("ar");
            $table->text("rovid_leiras");
            $table->text("hosszu_leiras");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('termekek');
    }
};
