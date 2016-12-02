<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pricing_papers', function (Blueprint $table) {
           
            $table->foreign('shell_id')->references('id')->on('pricing_shells')->onUpdate('cascade')->onDelete('set null');
            $table->foreign('weight_id')->references('id')->on('pricing_weights')->onUpdate('cascade')->onDelete('set null');
        });

        Schema::table('pricing_packages', function (Blueprint $table) {
            $table->foreign('paper_id')->references('id')->on('pricing_papers')->onUpdate('cascade')->onDelete('set null');
            $table->foreign('format_id')->references('id')->on('pricing_formats')->onUpdate('cascade')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pricing_papers', function(Blueprint $table){
            $table->dropForeign('pricing_papers_shell_id_foreign');
            $table->dropForeign('pricing_papers_weight_id_foreign');
        });

        Schema::table('pricing_packages', function(Blueprint $table){
            $table->dropForeign('pricing_packages_format_id_foreign');
            $table->dropForeign('pricing_packages_paper_id_foreign');
        });

    }
}
