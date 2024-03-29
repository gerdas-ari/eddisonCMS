<?php namespace Itome\Portfolio\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateItomePortfolioCards4 extends Migration
{
    public function up()
{
    Schema::table('itome_portfolio_cards', function($table)
    {
        $table->boolean('is_published')->default(0);
    });
}

public function down()
{
    Schema::table('itome_portfolio_cards', function($table)
    {
        $table->dropColumn('is_published');
    });
}
}
