<?php namespace Itome\Portfolio\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateItomePortfolioCards8 extends Migration
{
    public function up()
{
    Schema::table('itome_portfolio_cards', function($table)
    {
        $table->string('about', 25525555)->change();
    });
}

public function down()
{
    Schema::table('itome_portfolio_cards', function($table)
    {
        $table->string('about', 255)->change();
    });
}
}
