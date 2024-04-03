<?php namespace Itome\Portfolio\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateItomePortfolioCardsTypes2 extends Migration
{
    public function up()
{
    Schema::table('itome_portfolio_cards_types', function($table)
    {
        $table->integer('sort_order')->nullable()->change();
    });
}

public function down()
{
    Schema::table('itome_portfolio_cards_types', function($table)
    {
        $table->integer('sort_order')->nullable(false)->change();
    });
}
}
