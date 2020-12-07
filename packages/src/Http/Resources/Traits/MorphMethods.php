<?php

/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace SIGA\Http\Resources\Traits;

use Str;

trait MorphMethods
{

    public function makeMorph(&$field, $morph)
    {

        if ($field->value) {
            $values = [];
            if (is_array($field->value)) {
                foreach ($field->value as $value) {
                    $value->component(sprintf("Field%sComponent", Str::title($value->component)));
                    if (isset($morph->{$value->name})) {
                        $value->value($morph->{$value->name});
                    }
                    $values[] = $value;
                }
            }

            $field->value($values);
        }
        return $field;
    }
}
