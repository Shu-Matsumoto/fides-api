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
        Schema::create('play_conditions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('actor_users')->cascadeOnUpdate()->cascadeOnDelete();
            $table->unsignedInteger('honban')->comment('本番');
            $table->unsignedInteger('gomunashi')->comment('ゴム無し');
            $table->unsignedInteger('nakadashi')->comment('中出し');
            $table->unsignedInteger('ferachio')->comment('フェラチオ');
            $table->unsignedInteger('iramachio')->comment('イラマチオ');
            $table->unsignedInteger('kounaihassha')->comment('口内発射');
            $table->unsignedInteger('gansha')->comment('顔射');
            $table->unsignedInteger('gokkun')->comment('ごっくん');
            $table->unsignedInteger('bukkake')->comment('ぶっかけ');
            $table->unsignedInteger('anal')->comment('アナル');
            $table->unsignedInteger('anal_finger')->comment('アナル（指）');
            $table->unsignedInteger('anal_toy')->comment('アナル（おもちゃ）');
            $table->unsignedInteger('anal_dankon')->comment('アナル（男根）');
            $table->unsignedInteger('toys')->comment('おもちゃ');
            $table->unsignedInteger('rotar')->comment('ローター');
            $table->unsignedInteger('denma')->comment('電マ');
            $table->unsignedInteger('vibe')->comment('バイブ');
            $table->unsignedInteger('machine_vibe')->comment('マシンバイブ');
            $table->unsignedInteger('chizyo')->comment('痴女');
            $table->unsignedInteger('roshutsu')->comment('露出');
            $table->unsignedInteger('gaihakuroke')->comment('外泊ロケ');
            $table->unsignedInteger('gaikokujin')->comment('外国人');
            $table->unsignedInteger('les_tachi')->comment('レズ（タチ）');
            $table->unsignedInteger('les_neko')->comment('レズ（ネコ）');
            $table->unsignedInteger('multiplay')->comment('複数プレイ');
            $table->unsignedInteger('onani')->comment('オナニー');
            $table->unsignedInteger('teimou')->comment('剃毛');
            $table->unsignedInteger('hounyou')->comment('放尿');
            $table->unsignedInteger('innyou')->comment('飲尿');
            $table->unsignedInteger('yokunyou')->comment('浴尿');
            $table->unsignedInteger('giji_innyou')->comment('飲尿・浴尿（擬似）');
            $table->unsignedInteger('rape')->comment('レイプ');
            $table->unsignedInteger('rape_head')->comment('レイプ（ハード）');
            $table->unsignedInteger('sm')->comment('SM');
            $table->unsignedInteger('spamking')->comment('スパンキング');
            $table->unsignedInteger('bara_muchi')->comment('ムチ（バラムチ）');
            $table->unsignedInteger('ippon_muchi')->comment('ムチ（１本ムチ）');
            $table->unsignedInteger('rousoku')->comment('ろうそく');
            $table->unsignedInteger('kinbaku')->comment('緊縛');
            $table->unsignedInteger('hanahukku')->comment('鼻フック');
            $table->unsignedInteger('kanchou')->comment('浣腸');
            $table->unsignedInteger('binta')->comment('ビンタ');
            $table->unsignedInteger('kubisime')->comment('首しめ');
            $table->unsignedInteger('fist')->comment('フィスト');
            $table->unsignedInteger('dance')->comment('ダンス');
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
        Schema::dropIfExists('play_conditions');
    }
};
