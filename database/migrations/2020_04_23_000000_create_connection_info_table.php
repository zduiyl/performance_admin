<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConnectionInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('connection_info', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable()->default('')->comment('标题');
            $table->string('url')->nullable()->comment('连接url');
            $table->string('type')->comment('类型 sql redis');
            $table->string('host')->comment('访问地址');
            $table->integer('port')->comment('端口');
            $table->string('database')->nullable()->default('')->comment('数据库名');
            $table->string('username')->nullable()->default('')->comment('用户名');
            $table->string('passowrd')->nullable()->default('')->comment('密码');
            $table->string('charset')->nullable()->default('')->comment('字符编码');
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
        Schema::dropIfExists('connection_info');
    }
}
