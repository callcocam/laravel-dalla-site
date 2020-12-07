<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use SIGA\Database\Schema\SchemaManager;

class AddToLanguageFieldTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $tables = SchemaManager::listTableNames();
        foreach ($tables as $currentTable) {
            if (Schema::hasColumn($currentTable, 'status')) {
                if (!Schema::hasColumn($currentTable, 'language')) {
                    Schema::table($currentTable, function (Blueprint $table) {
                        $table->string('language')->default('pt_BR')->nullable()->after('status');
                    });
                }
            }
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

    }
}
