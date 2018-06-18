<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AnglersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // pref
        Schema::create('pref', function (Blueprint $table) {
            $table->Autoincrement('id');    
            $table->string('pref')->comment('都道府県')->nullable();
            $table->timestamp('created_at')->nullable();    
            $table->timestamp('updated_at')->nullable();    
        });
    // 外部キーの記載方法
    //$table->foreign('user_id')
    //  ->references('id')->on('users')
    //  ->onDelete('cascade');

        // user_profile
        Schema::create('user_profille', function (Blueprint $table) {
            $table->Autoincrement('id');    
            # varcharaという指定の仕方はありません。32行目以下を参照。
            $table->string('name', 255)->comment('名前');    
            # これは
            # $rable->string('name', 255)->comment('名前');という記載の仕方になります。
            # NULLは　nullable() と記載をする必要があります。
            $table->text('profile')->comment('プロフ')->nullable();    
            $table->integer('main_place_pref')->comment('メインフィールド');    
            $table->string('main_place_city', 500)->comment('メインフィールド')->nullable();
            $table->string('specialty', 500)->comment('得意分野')->nullable();
            $table->smallInteger('genre')->comment('ジャンル')->nullable();    
            # smallintegerは、smallIntegerです。
            $table->smallInteger('record')->comment('記録')->nullable();    
            $table->string('img_path')->comment('アイコン画像')->nullable();    
            $table->smallInteger('mail_flg')->comment('メール送信フラグ');    
            $table->timestamp('created_at')->nullable();    
            $table->timestamp('updated_at')->nullable();    
            # 外部キーの例を以下に記述。
            $table->foreign('id')->references('')->on('');
            $table->foreign('main_place_pref')->references('id')->on('pref');
            $table->foreign('genre')->references('')->on('');
            $table->foreign('record')->references('')->on('Record');
        });

        // recode
        Schema::create('recode', function (Blueprint $table) {
            $table->Autoincrement('id');    
            $table->intefer('user_id')->comment('ユーザーテーブル');    
            $table->string('target', 500)->comment('対象魚');
            # tinyint は tinyInteger です。 
            $table->tinyInteger('memorial_flg')->comment('特別な思い出')->nullable();    
            $table->integer('size')->comment('サイズ')->nullable();    
            $table->integer('plan_id')->comment('プランID')->nullable();    
            $table->string('img_path1')->nullable();    
            $table->string('img_path2')->nullable();
            $table->string('img_path3')->nullable();    
            $table->timestamp('created_at')->nullable();    
            $table->timestamp('updated_at')->nullable();
            # 外部キーの例を以下に記述。
            $table->foreign('id')->references('')->on('');
            $table->foreign('plan_id')->references('id')->on('plans');                
        });

        // category
        Schema::create('category', function (Blueprint $table) {
            $table->Autoincrement('id');    
            $table->intefer('user_id')->comment('ユーザーテーブル外部キー');    
            $table->integer('user_blog_id')->comment('ユーザー記事外部キー');    
            $table->string('name', 600)->comment('カテゴリー名');    
            $table->timestamp('created_at')->nullable();    
            $table->timestamp('updated_at')->nullable();    
        });

        // user_blogs
        Schema::create('user_blogs', function (Blueprint $table) {
            $table->Autoincrement('id');    
            $table->intefer('user_id')->comment('ユーザーテーブル外部キー');    
            $table->string('title', 500)->comment('タイトル')->nullable();
            $table->text('news_story')->comment('本文');    
            $table->integer('categorires')->comment('カテゴリー')->nullable();    
            $table->timestamp('created_at')->nullable();    
            $table->timestamp('updated_at')->nullable();    
        });

        // plan
        Schema::create('plan', function (Blueprint $table) {
            $table->Autoincrement('id');    
            $table->intefer('user_id')->comment('ユーザーテーブル外部キー');    
            $table->date('plan_days')->comment('予定日')->nullable();    
            $table->string('plan_title', 255)->comment('予定タイトル')->nullable();
            $table->text('plan＿contents')->comment('内容')->nullable();    
            $table->smallInteger('with_user_id')->comment('行動ユーザー')->nullable();    
            $table->tinyInteger('money')->comment('金額')->nullable();    
            $table->timestamp('created_at')->nullable();    
            $table->timestamp('updated_at')->nullable();
            # 外部キーの例を以下に記述。
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('with_user_id')->references('id')->on('');                    
        });

        // user_evaluation
        Schema::create('user_evaluation', function (Blueprint $table) {
            $table->Autoincrement('id');    
            $table->intefer('evaluation')->comment('評価');    
            $table->timestamp('created_at');    
            $table->timestamp('updated_at');    
        });

        // settlement_match
        Schema::create('settlement_match', function (Blueprint $table) {
            $table->Autoincrement('id');    
            $table->intefer('user_id_to')->comment('コンタクトをとったユーザーID');    
            $table->integer('user_id_from')->comment('コンタクトを受け取ったuserID');    
            $table->integer('settlement_id')->comment('決済番号');    
            $table->intefer('settlement_money')->comment('決済金額');    
            $table->timestamp('created_at')->nullable();    
            $table->timestamp('updated_at')->nullable();
            # 外部キーの例を以下に記述。
            $table->foreign('user_id_to')->references('id')->on('users');
            $table->foreign('user_id_from')->references('id')->on('users');                    

        });

    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // 以下、他のテーブルも含めてください。
        Schema::dropIfExists('users');
    }

}
