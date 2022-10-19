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
        Schema::create('maker_users', function (Blueprint $table) {
            $table->id();
            $table->integer('acount_id');
            $table->string('email', 100)->unique()->collate('utf8mb4_general_ci')->comment('メールアドレス');
            $table->string('password')->comment('パスワード');
            $table->string('make_name');
            $table->string('image_path')->nullable($value = true);
            $table->string('url')->nullable($value = true);
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
        Schema::dropIfExists('maker_users');
    }
};
