<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenuAttributesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu_attributes', function (Blueprint $table) {
            $table->uuidId();
            $table->tenant();
            $table->user();
            $table->string('url')->nullable();
            $table->string('icon')->nullable();
            $table->string('i18n')->nullable();
            $table->enum('target', ['_blank', '_self', '_parent', '_top'])->nullable();
            $table->string('description')->nullable();
            $table->uuidMorphs('menuattributeable','menu_attrs_menu_type_attributeable_id_index');
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
        Schema::dropIfExists('menu_attributes');
    }
}
