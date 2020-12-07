<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSlidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sliders', function (Blueprint $table) {
            $table->uuidId();
            $table->tenant();
            $table->user();
            $table->string('name');
            $table->string('slug');
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
        Schema::dropIfExists('sliders');
    }
}
