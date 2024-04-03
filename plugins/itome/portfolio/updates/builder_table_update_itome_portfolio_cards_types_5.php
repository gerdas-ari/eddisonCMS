<?php namespace Itome\Portfolio\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateItomePortfolioCardsTypes5 extends Migration
{
    public function up()
{
    Schema::table('itome_portfolio_cards_types', function($table)
    {
        $table->dropColumn('sort_order');
    });
}

public function down()
{
    Schema::table('itome_portfolio_cards_types', function($table)
    {
        $table->integer('sort_order');
    });
}
}
