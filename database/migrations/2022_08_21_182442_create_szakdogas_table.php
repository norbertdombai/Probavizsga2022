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
        Schema::create('szakdoga', function (Blueprint $table) {
            $table->id('id');
            $table->String('szakdoga_nev');
            $table->String('githublink');
            $table->String('oldallink');
            $table->String('tagokneve');
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
        Schema::dropIfExists('szakdoga');
    }
};
