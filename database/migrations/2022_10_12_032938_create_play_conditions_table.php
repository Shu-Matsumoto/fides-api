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
        Schema::create('play_conditions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->cascadeOnUpdate()->cascadeOnDelete();
            $table->unsignedInteger('honban')->comment('本番');
            $table->unsignedInteger('gomunashi')->comment('ゴム無し');
            $table->unsignedInteger('nakadashi')->comment('中出し');
            $table->unsignedInteger('ferachio')->comment('フェラチオ');
            $table->unsignedInteger('iramachio')->comment('イラマチオ');
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
        Schema::dropIfExists('play_conditions');
    }
};
