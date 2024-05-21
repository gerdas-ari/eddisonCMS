<?php namespace Itome\Portfolio\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateItomePortfolioTags extends Migration
{
    public function up()
{
    Schema::create('itome_portfolio_tags', function($table)
    {
        $table->engine = 'InnoDB';
        $table->increments('id')->unsigned();
        $table->text('name');
    });
}

public function down()
{
    Schema::dropIfExists('itome_portfolio_tags');
}
}
