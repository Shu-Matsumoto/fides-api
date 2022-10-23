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
        Schema::create('violation_reports', function (Blueprint $table) {
            $table->id();
            $table->foreignId('actor_user_id')->constrained('actor_users')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('maker_user_id')->constrained('maker_users')->cascadeOnUpdate()->cascadeOnDelete();
            $table->unsignedInteger('sender_dir')->comment('送信方向');
            $table->unsignedInteger('breach_contract')->comment('契約違反');
            $table->unsignedInteger('withdrawal_negotiation')->comment('引き抜き交渉');
            $table->unsignedInteger('business_interruption')->comment('営業妨害');
            $table->unsignedInteger('nuisance')->comment('迷惑行為');
            $table->unsignedInteger('other')->comment('その他');
            $table->text('explanation_text')->comment('違反行為の説明');
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
        Schema::dropIfExists('violation_reports');
    }
};
