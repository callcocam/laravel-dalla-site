<?php

/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace SIGA\Http\Resources\Traits;

use Str;

trait ArrayMethods
{

    public function makeArray(&$field, $model)
    {


        if ($field->value) {
            $values = [];
            if (is_array($field->value)) {
                foreach ($field->value as $value) {
                    $value->component(sprintf("Field%sComponent", Str::title($value->component)));
                    if (isset($model[$value->name])) {
                        $value->value($model[$value->name]);
                    }
                    $values[] = $value;
                }
            }

            $field->value($values);
        }
        return $field;
    }
}
