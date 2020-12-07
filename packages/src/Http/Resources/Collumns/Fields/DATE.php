<?php

/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace SIGA\Http\Resources\Collumns\Fields;

use SIGA\Http\Resources\Collumns\AbstractFields;

class DATE extends AbstractFields
{

    public static function make(...$parameters)
    {

        $make = new static(...$parameters);

        $args = func_num_args();

        switch ($args) {
            case 1:
                $make->label($parameters[0]);
                $make->attributes([
                    'placeholder' => $parameters[0],
                    'format' => 'dd/MM/yyyy'
                ]);
                $make->name($parameters[0]);
                break;
            case 2:
                $make->label($parameters[0]);
                $make->attributes([
                    'placeholder' => $parameters[0],
                    'format' => 'dd/MM/yyyy'
                ]);
                $make->name($parameters[1], true);
                break;
        }

        $make->type('date');
        $make->component($make->type);
        $make->default('');

        return $make;
    }
}
