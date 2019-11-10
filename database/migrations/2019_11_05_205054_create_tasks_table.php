<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration
{
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('content');  //content カラム追加
            $table->timestamps();
            $table->string('status', 10);
             //外部キー制約のためのカラム
            $table->integer('user_id')->unsigned()->index();
            
             // 外部キー制約　データベースの機能
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    public function down()
    {
        Schema::dropIfExists('tasks');
    }
}
