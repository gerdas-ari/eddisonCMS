<?php namespace Itome\MainBlock\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateItomeMainblockContent extends Migration
{
    public function up()
{
    Schema::create('itome_mainblock_content', function($table)
    {
        $table->engine = 'InnoDB';
        $table->increments('id')->unsigned();
        $table->text('title');
    });
}

public function down()
{
    Schema::dropIfExists('itome_mainblock_content');
}
}
