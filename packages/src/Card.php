<?php

/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace SIGA;

use Illuminate\Support\Traits\ForwardsCalls;

class Card
{

    use ForwardsCalls;

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
                $make->name($parameters[1]);
                break;
        }

        $make->icon("");
        $make->component("Child");

        return $make;
    }

    public function name($name)
    {
        $this->__set('name', $name);

        return $this;
    }

    public function component($component)
    {
        $this->__set('component', $component);

        return $this;
    }

    public function item($items)
    {
        $this->__set('items', $items);

        return $this;
    }


    public function icon($icon)
    {
        $this->__set('icon', $icon);

        return $this;
    }

    public function label($label)
    {
        $this->__set('label', $label);

        return $this;
    }
    /**
     * set value field
     *
     * @param mixid $value
     * @return $this
     */
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

    /**
     * Dynamically pass method calls to the underlying resource.
     *
     * @param  string  $method
     * @param  array  $parameters
     * @return mixed
     */
    public function __call($method, $parameters)
    {
        if (property_exists($this->resource, $method))
            return $this->forwardCallTo($this->resource, $method, $parameters);
    }


    public function __serialize()
    {
        return $this;
    }

    public function __set($name, $value)
    {
        $this->{$name} = $value;
    }
}
