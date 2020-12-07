<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddToComponentMakesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('makes', function (Blueprint $table) {
            $table->string('index_component', 100)->after('app_method')->default("AbstractList");
            $table->string('list_component', 100)->after('index_component')->default("AbstractList");
            $table->string('create_component', 100)->after('list_component')->default("AbstractForm");
            $table->string('show_component', 100)->after('create_component')->default("AbstractShow");
            $table->string('edit_component', 100)->after('show_component')->default("AbstractForm");
            $table->string('destroy_component', 100)->after('edit_component')->default("AbstractDestroy");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('makes', function (Blueprint $table) {
            //
        });
    }
}
