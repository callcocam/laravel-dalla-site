<?php
/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */
use Illuminate\Database\Schema\Blueprint;

Blueprint::macro('tenant', function($name="tenant_id"){
    $this->uuid($name)->nullable();
    $this
        ->foreign($name)
        ->references('id')
        ->on('tenants')
        ->onUpdate('cascade')
        ->onDelete('cascade');
});

