<?php namespace Itome\Portfolio\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateItomePortfolioYears extends Migration
{
    public function up()
{
    Schema::table('itome_portfolio_years', function($table)
    {
        $table->string('name', 255);
        $table->integer('sort_order')->nullable();
    });
}

public function down()
{
    Schema::table('itome_portfolio_years', function($table)
    {
        $table->dropColumn('name');
        $table->dropColumn('sort_order');
    });
}
}
