<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnPdfCn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cns', function (Blueprint $table) {
          $table->string('pdf')->nullable()->after('dateExpération');        
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cns', function (Blueprint $table) {
            Schema::dropIfExists('pdf');
        });
    }
}
