<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnForBelongsToTasklistTable extends Migration
{
   
    public function up()
    {
        Schema::table('tasks', function (Blueprint $table) {
             //外部キー制約のためのカラム
            $table->integer('user_id')->unsigned()->index();
            
             // 外部キー制約　データベースの機能
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    public function down()
    {
    
    }
}
