<?php namespace Itome\Portfolio\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateItomePortfolioCards10 extends Migration
{
    public function up()
{
    Schema::table('itome_portfolio_cards', function($table)
    {
        $table->dropColumn('result');
    });
}

public function down()
{
    Schema::table('itome_portfolio_cards', function($table)
    {
        $table->string('result', 255);
    });
}
}
