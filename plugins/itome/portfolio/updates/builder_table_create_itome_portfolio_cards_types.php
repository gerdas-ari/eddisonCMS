<?php namespace Itome\Portfolio\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateItomePortfolioCardsTypes extends Migration
{
    public function up()
{
    Schema::create('itome_portfolio_cards_types', function($table)
    {
        $table->engine = 'InnoDB';
        $table->integer('card_id');
        $table->integer('type_id');
    });
}

public function down()
{
    Schema::dropIfExists('itome_portfolio_cards_types');
}
}
