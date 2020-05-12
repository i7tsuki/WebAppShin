<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUserIdToTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tasks', function (Blueprint $table) {
            // 追加：user_id カラムを初期値 1 として追加
            $table->unsignedInteger('user_id')->default(1);
            // 追加：user_id カラムに対して users.id への外部キーを on Delete Cascade で設定
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tasks', function (Blueprint $table) {
            // 追加：設定した外部キーを削除
            $table->dropForeign('tasks_user_id_foreign');
            // 追加：user_id カラムを削除
            $table->dropColumn('user_id');
        });
    }
}
