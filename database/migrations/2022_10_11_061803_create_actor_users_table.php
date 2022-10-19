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
        $table->$table->foreignId('user_id')->constrained('system_acounts.id')->cascadeOnUpdate()->cascadeOnDelete();
        $table->string('email', 100)->unique()->collate('utf8mb4_general_ci')->comment('メールアドレス');
        $table->string('password')->comment('パスワード');
        $table->string('user_name')->comment('ユーザー名');
        $table->string('real_name', 128)->comment('本名');
        $table->string('image_path', 200)->nullable()->comment('画像パス');
        $table->timestamp('birthday')->comment('誕生日');
        $table->unsignedInteger('blood_type')->comment('血液型');
        $table->unsignedInteger('height')->comment('身長(単位:cm)');
        $table->unsignedInteger('weight')->comment('体重(単位:kg)');
        $table->unsignedInteger('clothes_size')->comment('服サイズ(単位:号)・・例:XS');
        $table->unsignedInteger('shoes_size')->comment('靴サイズ(単位:cm)');
        $table->unsignedInteger('breast_size')->comment('バストサイズ (単位:カップ)');
        $table->unsignedInteger('breast_top_size')->comment('バストトップサイズ(単位:cm)');
        $table->unsignedInteger('breast_under_size')->comment('バストアンダーサイズ(単位:cm)');
        $table->unsignedInteger('waist_size')->comment('ウエストサイズ(単位:cm)');
        $table->unsignedInteger('hip_size')->comment('ヒップサイズ(単位:cm)');
        $table->unsignedInteger('open')->comment('公開');
        $table->unsignedInteger('is_admin')->comment('管理者');
        $table->unsignedInteger('is_deleted')->comment('ユーザー削除状態');
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
