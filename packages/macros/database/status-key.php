<?php
/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */
use Illuminate\Database\Schema\Blueprint;

Blueprint::macro('status', function($status =[]){
    $this->enum('status', array_merge([  'deleted','draft','published'], $status))->default('published');
});

