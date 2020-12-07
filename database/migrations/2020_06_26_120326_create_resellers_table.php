<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResellersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resellers', function (Blueprint $table) {
            $table->uuidId();
            $table->tenant();
            $table->user();
            $table->string('name');
            $table->string('slug')->nullable();
            $table->string('subject')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->text('description')->nullable();
            $table->string('language')->default('pt_BR')->nullable();
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
        Schema::dropIfExists('resellers');
    }
}
