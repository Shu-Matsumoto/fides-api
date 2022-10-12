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
        Schema::create('actor_profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('actress_name', 128)->comment('女優名');
            $table->string('real_name', 128)->comment('本名');
            $table->timestamp('birthday')->comment('誕生日');
            $table->unsignedInteger('blood_type')->comment('血液型');
            $table->unsignedInteger('height')->comment('身長(単位:cm)');
            $table->unsignedInteger('weight')->comment('体重(単位:kg)');
            $table->unsignedInteger('clothes_size')->comment('服サイズ(単位:号)・・例:XS');
            $table->unsignedInteger('shoes_size')->comment('靴サイズ(単位:cm)');
            $table->unsignedInteger('breast_size')->comment('バストサイズ (単位:カップ)');
            $table->unsignedInteger('breast_top')->comment('バストトップサイズ(単位:cm)');
            $table->unsignedInteger('breast_under')->comment('バストアンダーサイズ(単位:cm)');
            $table->unsignedInteger('waist_size')->comment('ウエストサイズ(単位:cm)');
            $table->unsignedInteger('hip_size')->comment('ヒップサイズ(単位:cm)');

            $table->timestamps();
        });

        DB::statement("ALTER TABLE " . DB::getTablePrefix() . "actor_profiles COMMENT '女優プロフィール'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('actor_profiles');
    }
};
