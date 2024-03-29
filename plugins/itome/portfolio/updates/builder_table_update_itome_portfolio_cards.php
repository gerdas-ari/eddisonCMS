<?php namespace Itome\Portfolio\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateItomePortfolioCards extends Migration
{
    public function up()
{
    Schema::rename('itome_portfolio_card', 'itome_portfolio_cards');
}

public function down()
{
    Schema::rename('itome_portfolio_cards', 'itome_portfolio_card');
}
}
