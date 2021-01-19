<?php
/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */
use Illuminate\Database\Schema\Blueprint;

Blueprint::macro('user', function($name="user_id"){
    $this->uuid($name)->nullable();
    $this
        ->foreign($name)
        ->references('id')
        ->on('users')
        ->onUpdate('cascade')
        ->onDelete('cascade');
});

