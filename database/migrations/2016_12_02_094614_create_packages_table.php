<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pricing_packages', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('amount')->unsigned()->default(0);
            $table->decimal('tax')->unsigned()->default(0);
            $table->decimal('price_net')->unsigned()->default(0);
            $table->decimal('price_gross')->unsigned()->default(0);
            $table->integer('paper_id')->unsigned()->nullable();
            $table->integer('format_id')->unsigned()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pricing_packages');
    }
}
