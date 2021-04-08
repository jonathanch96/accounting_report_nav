<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddReportTypeIdToGLCategories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('g_l__categories', function (Blueprint $table) {
            $table->unsignedBigInteger('report_type_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('g_l__categories', function (Blueprint $table) {
             $table->dropColumn('report_type_id');
        });
    }
}
