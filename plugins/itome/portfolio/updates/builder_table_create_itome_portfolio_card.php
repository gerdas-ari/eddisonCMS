<?php namespace Itome\Portfolio\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateItomePortfolioCard extends Migration
{
    public function up()
{
    Schema::create('itome_portfolio_card', function($table)
    {
        $table->engine = 'InnoDB';
        $table->increments('id')->unsigned();
    });
}

public function down()
{
    Schema::dropIfExists('itome_portfolio_card');
}
}
