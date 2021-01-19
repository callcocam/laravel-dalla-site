<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMakesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('makes', function (Blueprint $table) {
            $table->uuidId();
            $table->tenant();
            $table->user();
            $table->string('name');
            $table->string('slug');
            $table->string('path')->nullable();
            $table->string('app_path')->default("App")->nullable();
            $table->string('app_root')->default("app")->nullable();
            $table->string('app_theme')->nullable();
            $table->string('app_model')->nullable();
            $table->string('app_controller')->nullable();
            $table->string('app_route')->nullable();
            $table->string('app_table')->nullable();
            $table->string('app_action')->default("index")->nullable();
            $table->enum('app_method', ['crud','get','post','put','delete'])->default("crud")->nullable();
            $table->string('description')->nullable();
            $table->integer('ordering')->default(0)->nullable();
            $table->status();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('makes');
    }
}
