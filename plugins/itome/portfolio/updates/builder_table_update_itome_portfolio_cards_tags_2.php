<?php namespace Itome\Portfolio\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateItomePortfolioCardsTags2 extends Migration
{
    public function up()
{
    Schema::table('itome_portfolio_cards_tags', function($table)
    {
        $table->dropColumn('slug');
    });
}

public function down()
{
    Schema::table('itome_portfolio_cards_tags', function($table)
    {
        $table->text('slug');
    });
}
}
