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
        Schema::create('actor_schedules', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('maker_id');
            $table->dateTime('start_time');
            $table->dateTime('end_time');
            $table->integer('recruiting')->nullable($value = true);
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
        Schema::dropIfExists('actor_schedules');
    }
};
