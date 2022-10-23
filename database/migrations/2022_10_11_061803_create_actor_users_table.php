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
        Schema::create('actor_users', function (Blueprint $table) {

            $table->id();
            $table->foreignId('acount_id')->constrained('system_acounts')->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('email', 100)->unique()->collate('utf8mb4_general_ci')->comment('メールアドレス');
            $table->string('password')->comment('ログインパスワード');
            $table->string('user_name')->comment('ユーザー名');
            $table->string('real_name', 128)->comment('本名');
            $table->string('image_path', 200)->nullable()->comment('画像パス');
            $table->timestamp('birthday')->comment('誕生日');
            $table->unsignedInteger('blood_type')->comment('血液型');
            $table->unsignedInteger('height')->comment('身長');
            $table->unsignedInteger('weight')->comment('体重');
            $table->unsignedInteger('clothes_size')->comment('服サイズ');
            $table->unsignedInteger('shoes_size')->comment('靴サイズ');
            $table->unsignedInteger('breast_size')->comment('バストサイズ');
            $table->unsignedInteger('breast_top_size')->comment('バストトップサイズ');
            $table->unsignedInteger('breast_under_size')->comment('バストアンダーサイズ');
            $table->unsignedInteger('waist_size')->comment('ウエストサイズ');
            $table->unsignedInteger('hip_size')->comment('ヒップサイズ');
            $table->unsignedInteger('open')->comment('公開');
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
        Schema::dropIfExists('actor_users');
    }
};
