<?php

/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace SIGA\Http\Resources\Traits;


trait MorphToManyMethods
{

    public function makeMorphToMany(&$field)
    {

        $field->value($this->morphToMany(
            $field->related,
            $field->name,
            $field->table,
            $field->foreignPivotKey,
            $field->relatedPivotKey,
            $field->parentKey,
            $field->relatedKey,
            $field->inverse
        )->get());
        return $field;
    }
}
