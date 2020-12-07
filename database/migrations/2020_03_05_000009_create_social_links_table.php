<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSocialLinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('social_links', function (Blueprint $table) {
            $table->uuidId();
            $table->tenant();
            $table->user();
            $table->string('name')->nullable();
            $table->string('slug')->nullable();
            $table->string('description')->nullable();
            $table->integer('ordering')->default(0)->nullable();
            $table->uuidMorphs('sociallinkable');
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
        Schema::dropIfExists('social_links');
    }
}
