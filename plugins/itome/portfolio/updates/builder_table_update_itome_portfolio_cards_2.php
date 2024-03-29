<?php namespace Itome\Portfolio\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateItomePortfolioCards2 extends Migration
{
    public function up()
{
    Schema::table('itome_portfolio_cards', function($table)
    {
        $table->string('title', 255);
        $table->string('client', 255);
        $table->string('result', 255);
        $table->string('about', 255);
        $table->integer('sort_order')->nullable();
    });
}

public function down()
{
    Schema::table('itome_portfolio_cards', function($table)
    {
        $table->dropColumn('title');
        $table->dropColumn('client');
        $table->dropColumn('result');
        $table->dropColumn('about');
        $table->dropColumn('sort_order');
    });
}
}
