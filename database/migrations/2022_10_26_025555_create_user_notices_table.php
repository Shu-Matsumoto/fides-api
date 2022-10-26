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
        Schema::create('user_notices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('actor_user_id')->constrained('actor_users')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('maker_user_id')->constrained('maker_users')->cascadeOnUpdate()->cascadeOnDelete();
            $table->unsignedInteger('user_type')->comment('ユーザータイプ');
            $table->unsignedInteger('type')->comment('通知タイプ');
            $table->unsignedInteger('already_read')->comment('既読');
            $table->unsignedInteger('category')->comment('カテゴリ');
            $table->unsignedInteger('information_id')->comment('情報ID');
            $table->text('title')->comment('タイトル');
            $table->text('sub_title')->comment('サブタイトル');
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
        Schema::dropIfExists('user_notices');
    }
};
