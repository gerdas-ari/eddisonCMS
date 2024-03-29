<?php namespace Itome\Portfolio\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateItomePortfolioTypes2 extends Migration
{
    public function up()
{
    Schema::table('itome_portfolio_types', function($table)
    {
        $table->string('slug', 255);
    });
}

public function down()
{
    Schema::table('itome_portfolio_types', function($table)
    {
        $table->dropColumn('slug');
    });
}
}
