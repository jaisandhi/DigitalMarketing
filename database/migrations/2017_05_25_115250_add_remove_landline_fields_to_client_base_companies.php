<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRemoveLandlineFieldsToClientBaseCompanies extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('client_base_companies', function($table) {
            $table->string('email', 150)->unique()->nullable();
            $table->boolean('is_deleted');
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
            $table->dropColumn('is_deleted');
            $table->dropColumn('email');
        });
    }
}
