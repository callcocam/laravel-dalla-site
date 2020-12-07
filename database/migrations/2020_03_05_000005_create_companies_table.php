<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->uuidId();
            $table->tenant();
            $table->user();
            $table->string('name', 255)->unique();
            $table->string('slug', 255);
            $table->string('email', 255)->unique();
            $table->string('document', 50)->nullable();
            $table->string('phone', 50)->nullable();
            $table->string('description')->nullable();
            $table->integer('ordering')->default(0)->nullable();
            $table->status();
            $table->softDeletes();
            $table->timestamps();
            $table->tenantUnique('slug');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('companies');
    }
}
