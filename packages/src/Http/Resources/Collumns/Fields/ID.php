<?php

/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace SIGA\Http\Resources\Collumns\Fields;

use SIGA\Http\Resources\Collumns\AbstractFields;

class ID extends AbstractFields
{

    public static function make(...$name)
    {

        $make = new static(...$name);

        $make->name($name[0], true);

        $make->type('hidden');
        $make->component($make->type);

        return $make;
    }
}
