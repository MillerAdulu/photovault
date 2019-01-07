<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddProviderToProviderCredentials extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('provider_credentials', function (Blueprint $table) {
            $table->enum('provider', ['facebook']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('provider_credentials', function (Blueprint $table) {
            $table->dropColumn('provider', ['facebook']);
        });
    }
}
