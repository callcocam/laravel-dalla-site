<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_menus', function (Blueprint $table) {
            $table->uuidId();
            $table->tenant();
            $table->user();
            $table->uuid('make_id')->nullable();
            $table->string('name');
            $table->string('slug');
            $table->integer('ordering')->default(0)->nullable();
            $table->status();
            $table->softDeletes();
            $table->timestamps();
            $table->tenantUnique('slug');
            $table->foreign('make_id')->references('id')->on('makes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sub_menus');
    }
}
