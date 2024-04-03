<?php namespace Itome\Portfolio\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateItomePortfolioCards9 extends Migration
{
    public function up()
{
    Schema::table('itome_portfolio_cards', function($table)
    {
        $table->dropColumn('type_id');
    });
}

public function down()
{
    Schema::table('itome_portfolio_cards', function($table)
    {
        $table->integer('type_id');
    });
}
}
