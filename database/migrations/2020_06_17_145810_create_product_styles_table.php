<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductStylesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_styles', function (Blueprint $table) {
            $table->uuidId();
            $table->tenant();
            $table->user();
            $table->string('name');
            $table->string('slug')->nullable();
            $table->string('ibu')->nullable();
            $table->string('abv')->nullable();
            $table->text('description')->nullable();
            $table->string('language')->default('pt_BR')->nullable();
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
        Schema::dropIfExists('product_styles');
    }
}
