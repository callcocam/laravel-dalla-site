<?php

/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace SIGA\Http\Resources\Collumns\Fields;

use SIGA\Http\Resources\Collumns\AbstractFields;

class ACTION extends AbstractFields
{

    public static function make(...$parameters)
    {

        $make = new static(...$parameters);

        $args = func_num_args();

        switch ($args) {
            case 1:
                $make->label($parameters[0]);
                $make->name($parameters[0]);
                break;
            case 2:
                $make->label($parameters[0]);
                $make->name($parameters[1], true);
                break;
        }

        $make->type('actions');
        $make->component($make->type);
        $make->hidden_edit();
        $make->hidden_text();
        $make->width("150");
        $make->hidden_create();
        return $make;
    }

    public function hidden_text(){

        $this->__set('hidden_text', true);
    }
}
