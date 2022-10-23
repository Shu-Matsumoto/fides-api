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
            $table->foreignId('actor_user_id')->constrained('actor_users')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('maker_user_id')->constrained('maker_users')->cascadeOnUpdate()->cascadeOnDelete();
            $table->dateTime('start_time')->comment('開始時刻');
            $table->dateTime('end_time')->comment('終了時刻');
            $table->unsignedInteger('recruiting')->nullable()->comment('募集中');
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
