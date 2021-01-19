<?php

/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace SIGA\Http\Resources\Collumns\Fields;

use SIGA\Http\Resources\Collumns\AbstractFields;

class PERMISSION extends AbstractFields
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

        $make->type('Permission');
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

        if (!isset($this->key)) {

            if ($this->entity) {

                $this->__set('key', $this->getModel()->getKeyName());
            }
        }

        $key = $this->key;

        if (is_object($value)) {
            $this->__set('value', $value->map(function ($model) use ($key) {
                return $model->{$key};
            }));
        }

        return $this;
    }

    public function entity(string $entity, $collumns = ['*'])
    {
        $this->__set('entity', $entity);

        $options = [];

        if (class_exists($entity)) {

            $options = $this->getModel()->query()->select($collumns)->orderBy('name')->get()->toArray();

        }

        $this->options($options);

        return $this;
    }

    public function options(array $options)
    {
        $this->__set('options', $options);

        return $this;
    }


    public function key(string $key)
    {
        $this->__set('key', $key);

        return $this;
    }

    protected function getModel()
    {


        if ($this->model) {
            return $this->model;
        }

        if (is_string($this->entity)) {
            $this->model = app($this->entity);
        }
        return $this->model;
    }
}
