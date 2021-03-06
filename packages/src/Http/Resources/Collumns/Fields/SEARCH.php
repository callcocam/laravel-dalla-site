<?php

/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace SIGA\Http\Resources\Collumns\Fields;

use SIGA\Http\Resources\Collumns\AbstractFields;

class SEARCH extends AbstractFields
{

    public static function make(...$parameters)
    {

        $make = new static(...$parameters);

        $args = func_num_args();

        switch ($args) {
            case 1:
                $make->label($parameters[0]);
                $make->attributes(['placeholder'=>$parameters[0]]);
                $make->name($parameters[0]);
                break;
            case 2:
                $make->label($parameters[0]);
                $make->attributes(['placeholder'=>$parameters[0]]);
                $make->name($parameters[1], true);
                break;
        }

        $make->type('search');
        $make->default('');
        $make->component($make->type);

        return $make;
    }
}
