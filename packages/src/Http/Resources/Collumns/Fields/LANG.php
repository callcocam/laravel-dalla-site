<?php

/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace SIGA\Http\Resources\Collumns\Fields;

use SIGA\Http\Resources\Collumns\AbstractFields;

class LANG extends AbstractFields
{

    protected $model;

    public static function make(...$parameters)
    {

        $make = new static(...$parameters);

        $args = func_num_args();

        switch ($args) {
            case 1:
                $make->label(__($parameters[0]));
                $make->name($parameters[0]);
                break;
            case 2:
                $make->label(__($parameters[0]));
                $make->name($parameters[1], true);
                break;
        }

        $make->type('select');
        $make->default('pt_BR');
        $make->value('pt_BR');
        $make->component($make->type);
        $make->options([
            ['code'=>'pt_BR', 'label'=>'BRA'],
            ['code'=>'en', 'label'=>'ENG'],
            ['code'=>'es', 'label'=>'ESP'],
        ]);

        return $make;
    }


    public function options(array $options)
    {
        $this->__set('options', $options);

        return $this;
    }

}
