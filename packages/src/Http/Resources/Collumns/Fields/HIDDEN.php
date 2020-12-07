<?php

/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace SIGA\Http\Resources\Collumns\Fields;

use SIGA\Http\Resources\Collumns\AbstractFields;

class HIDDEN extends AbstractFields
{

    public static function make(...$parameters)
    {

        $make = new static(...$parameters);
        $make->name($parameters[0], true);
        $make->type('hidden');
        $make->component($make->type);
        $make->default('');

        return $make;
    }
}
