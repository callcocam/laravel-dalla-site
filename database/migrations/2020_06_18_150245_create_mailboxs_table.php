<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMailboxsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mailboxs', function (Blueprint $table) {
            $table->uuidId();
            $table->tenant();
            $table->user();
            $table->string('name');
            $table->string('slug')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->text('description')->nullable();
            $table->string('language')->default('pt_BR')->nullable();
            $table->integer('ordering')->default(0)->nullable();
            $table->status(['reply']);
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
        Schema::dropIfExists('mailboxs');
    }
}
