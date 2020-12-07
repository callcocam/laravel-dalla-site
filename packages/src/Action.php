<?php

/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace SIGA;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Traits\ForwardsCalls;

class Action
{

    use ForwardsCalls;

    public static function make(...$parameters)
    {

        $make = new static(...$parameters);

        $args = func_num_args();

        switch ($args) {
            case 1:
                $make->label($parameters[0]);
                $make->component($parameters[0]);
                $make->name($parameters[0]);
                break;
            case 2:
                $make->label($parameters[0]);
                $make->component($parameters[0]);
                $make->name($parameters[1]);
                break;
        }

        $make->icon("");


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

    public function route($route)
    {
        $this->__set('route', null);

        if (Route::has($route)) {

            $this->__set('route', route($route));
        }

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
