<?php

/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace SIGA\Http\Resources\Traits;

use Str;

trait CardMethods
{

    public function makeCard(&$field)
    {

        $field->component(sprintf("Field%sComponent", Str::title($field->component)));
        if (isset($this->{$field->name}) && $this->{$field->name}) {
            $field->value($this->{$field->name});
        }
        return $field;
    }
}
