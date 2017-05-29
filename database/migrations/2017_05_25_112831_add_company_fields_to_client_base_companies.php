<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCompanyFieldsToClientBaseCompanies extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('client_base_companies', function($table) {
            $table->string('land_line');
            $table->integer('no_of_employee');
            $table->string('Industry_Type');
            $table->string('Comments');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('client_base_companies', function($table) {
            $table->dropColumn('land_line');
            $table->dropColumn('no_of_employee');
            $table->dropColumn('Industry_Type');
            $table->dropColumn('Comments');
        });
    }
}
