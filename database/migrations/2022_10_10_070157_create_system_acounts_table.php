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
        Schema::create('system_acounts', function (Blueprint $table) {
            $table->id();
            $table->string('login_id', 100)->unique()->collate('utf8mb4_general_ci')->comment('ログインID');
            $table->string('password')->comment('ログインパスワード');
            $table->unsignedInteger('type')->comment('ユーザータイプ');
            $table->unsignedInteger('is_admin')->comment('管理者');
            $table->unsignedInteger('is_deleted')->comment('ユーザー削除');
            $table->rememberToken();
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
        Schema::dropIfExists('system_acounts');
    }
};
