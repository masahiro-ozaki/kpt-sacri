<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTitleToKptsTable extends Migration
{
    
    public function up()
    {
        Schema::table('kpts', function (Blueprint $table) {
             $table->string('title');
       });
    }

    
    public function down()
    {
        Schema::table('kpts', function (Blueprint $table) {
             $table->dropColumn('title');
        });
    }
}
