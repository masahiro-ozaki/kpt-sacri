<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddKptsToKptsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('kpts', function (Blueprint $table) {
            $table->string('dates');
            $table->string('keep');
            $table->string('problem');
            $table->string('Try');
            $table->string('MVP')->nullable();
            $table->string('reason')->nullable();
            $table->string('want')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('kpts', function (Blueprint $table) {
            $table->dropColumn('dates');
            $table->dropColumn('keep');
            $table->dropColumn('problem');
            $table->dropColumn('Try');
            $table->dropColumn('MVP');
            $table->dropColumn('reason');
            $table->dropColumn('want');
        });
    }
}
