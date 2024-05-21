<?php namespace Itome\Portfolio\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateItomePortfolioTags extends Migration
{
    public function up()
{
    Schema::table('itome_portfolio_tags', function($table)
    {
        $table->integer('sort_order');
    });
}

public function down()
{
    Schema::table('itome_portfolio_tags', function($table)
    {
        $table->dropColumn('sort_order');
    });
}
}
