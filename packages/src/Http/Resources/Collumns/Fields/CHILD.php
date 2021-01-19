<?php

/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace SIGA\Http\Resources\Collumns\Fields;

use App\Http\Resources\SubjectCollection;
use SIGA\Http\Resources\Collumns\AbstractFields;

class CHILD extends AbstractFields
{

    protected $model;

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

        $make->type('Child');
        $make->component($make->type);
        $make->default('');

        return $make;
    }


    public function value($value)
    {


        if (!isset($this->entity)) {
            $this->__set('value', $value);
            return $this;
        }
        if (!is_object($value)) {
            $this->__set('value', $value);
            return $this;
        }
        $entity = $this->entity;

        $this->__set('value', new $entity($value));

        return $this;
    }

    public function entity(string $entity)
    {
        $this->__set('entity', $entity);

        return $this;
    }
}
