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
            $table->unsignedInteger('status')->comment('募集中');
            $table->unsignedInteger('fee')->comment('出演料');
            $table->text('title')->comment('タイトル');
            $table->text('summary')->comment('企画概要');
            $table->text('date_time')->comment('撮影日時');
            $table->text('place')->comment('撮影場所');
            $table->unsignedInteger('makeup')->comment('メイク付');
            $table->unsignedInteger('rental_costume')->comment('貸衣裳');
            $table->unsignedInteger('private_room')->comment('控室(個室)');
            $table->unsignedInteger('shared_room')->comment('控室(相部屋)');
            $table->unsignedInteger('pick_up')->comment('送迎');
            $table->unsignedInteger('meal')->comment('食事');
            $table->text('message')->comment('メッセージ');
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
