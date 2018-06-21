<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNullable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('kpts', function (Blueprint $table) {
            $table->string('MVP')->nullable()->change();
            $table->string('reason')->nullable()->change();
            $table->string('want')->nullable()->change();
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
            $table->dropColumn('MVP')->nullable(false)->change();
            $table->dropColumn('reason')->nullable(false)->change();
            $table->dropColumn('want')->nullable(false)->change();
        });
    }
}
