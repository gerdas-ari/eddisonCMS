<?php namespace Itome\Portfolio\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateItomePortfolioYears extends Migration
{
    public function up()
{
    Schema::create('itome_portfolio_years', function($table)
    {
        $table->engine = 'InnoDB';
        $table->increments('id')->unsigned();
    });
}

public function down()
{
    Schema::dropIfExists('itome_portfolio_years');
}
}
