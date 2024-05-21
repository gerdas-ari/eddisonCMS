<?php namespace Itome\Portfolio\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateItomePortfolioCardsTags extends Migration
{
    public function up()
{
    Schema::create('itome_portfolio_cards_tags', function($table)
    {
        $table->engine = 'InnoDB';
        $table->increments('id')->unsigned();
        $table->integer('card_id');
        $table->integer('tag_id');
    });
}

public function down()
{
    Schema::dropIfExists('itome_portfolio_cards_tags');
}
}
