<?php namespace Itome\Portfolio\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateItomePortfolioCardsTypes6 extends Migration
{
    public function up()
{
    Schema::table('itome_portfolio_cards_types', function($table)
    {
        $table->dropColumn('id');
    });
}

public function down()
{
    Schema::table('itome_portfolio_cards_types', function($table)
    {
        $table->increments('id')->unsigned();
    });
}
}
