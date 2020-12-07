<?php
/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */
use Illuminate\Database\Schema\Blueprint;

Blueprint::macro('tenantUnique', function($column,$collumns=[],$tenant="tenant_id"){
    if(!is_array($collumns)){
        $collumns = [$collumns];
    }
    $uniques = array_merge([$column,$tenant], $collumns);
    $this->unique($uniques);
});
