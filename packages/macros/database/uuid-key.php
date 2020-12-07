<?php
/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */
use Illuminate\Database\Schema\Blueprint;

Blueprint::macro('uuidId', function($name="id"){
    $this->uuid($name)->primary();
});
