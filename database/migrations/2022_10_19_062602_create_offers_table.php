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
        Schema::create('offers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('actor_schedule_id')->constrained('actor_schedules')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('maker_user_id')->constrained('maker_users')->cascadeOnUpdate()->cascadeOnDelete();
            //$table->foreignId('actor_user_id')->constrained('actor_users')->cascadeOnUpdate()->cascadeOnDelete();
            $table->unsignedInteger('status');
            $table->integer('fee');
            $table->text('title');
            $table->text('summary');
            $table->text('date_time');
            $table->text('place');
            $table->integer('makeup');
            $table->integer('rental_costume');
            $table->integer('private_room');
            $table->integer('shared_room');
            $table->integer('pick_up');
            $table->integer('meal');
            $table->text('message');
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
        Schema::dropIfExists('offers');
    }
};
