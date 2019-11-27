<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRssitemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rssitems', function (Blueprint $table) {
            // table configuration
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';
            
            // attributes
            $table->bigIncrements('id');
            $table->string('channel');
            $table->string('channel_link')->nullable();
            $table->string('guid')->nullable();
            $table->string('link');
            $table->string('pub_date');
            $table->text('description')->nullable();
            $table->text('xml');
            $table->timestamps();

            // indexes
            $table->unique('link');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rssitems');
    }
}
