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
        Schema::create('chats', function (Blueprint $table) {
            $table->id();
            $table->foreignId('actor_user_id')->constrained('actor_users')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('maker_user_id')->constrained('maker_users')->cascadeOnUpdate()->cascadeOnDelete();
            $table->unsignedInteger('sender_dir')->comment('送信方向');
            $table->text('comment')->comment('コメント');
            $table->timestamp('send_time')->comment('送信日時');
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
        Schema::dropIfExists('chats');
    }
};
