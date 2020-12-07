<?php

/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace SIGA\Http\Resources\Collumns;

use Illuminate\Support\Str;
use Illuminate\Support\Traits\ForwardsCalls;

abstract class AbstractFields
{

    use ForwardsCalls;

    abstract public static function make(...$parameters);


    /**
     * set default field
     *
     * @param mixed $default
     * @return $this
     */
    public function
    default($default)
    {
        $this->__set('default', $default);

        return $this;
    }

    /**
     * set type field
     *
     * @param string $type
     * @return $this
     */
    public function permissions($permissions = null)
    {
        $this->__set('permissions', $permissions);

        return $this;
    }


    /**
     * set type field
     *
     * @param string $type
     * @return $this
     */
    public function require($require)
    {
        $this->__set('require', $require);

        return $this;
    }

    /**
     * set type field
     *
     * @param string $type
     * @return $this
     */
    public function type($type)
    {
        $this->__set('type', $type);

        return $this;
    }

    /**
     * set component field
     *
     * @param string $component
     * @return $this
     */
    public function component($name, $component = 'component')
    {
        $this->__set($component, $name);

        return $this;
    }

    /**
     * set name field
     *
     * @param string $name
     * @return $this
     */
    public function name($name, $original = false)
    {
        if ($original) {
            $this->__set('name', $name);
        } else {
            $this->__set('name', Str::slug($name, '_'));
        }

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
        $this->__set('value', $value);

        return $this;
    }

    /**
     * set label field
     *
     * @param string $label
     * @return $this
     */
    public function label($label)
    {
        $this->attributes(["placeholder" => Str::title($label)]);
        $this->__set('label', Str::title($label));

        return $this;
    }

    /**
     * set attributes field
     *
     * @param array $attributes
     * @return $this
     */
    public function attributes(array $attributes)
    {

        if (isset($this->attributes)) {
            $this->__set('attributes', array_merge($this->attributes, $attributes));
        } else {
            $this->__set('attributes', $attributes);
        }

        return $this;
    }

    /**
     * set sortable collumn field
     *
     * @return $this
     */
    public function sortable()
    {
        $this->__set('sortable', true);

        return $this;
    }

    /**
     * set sortable collumn field
     *
     * @return $this
     */
    public function width($width)
    {
        $this->__set('width', sprintf("%spx", $width));

        return $this;
    }

    /**
     * set hidden field in list
     *
     * @return $this
     */
    public function hidden_index()
    {
        $this->__set('hidden_index', true);

        return $this;
    }

    /**
     * set hidden show
     *
     * @return $this
     */
    public function hidden_show()
    {
        $this->__set('hidden_show', true);

        return $this;
    }

    /**
     * set hidden create
     *
     * @return $this
     */
    public function hidden_create()
    {
        $this->__set('hidden_create', true);

        return $this;
    }

    /**
     * set hidden edit
     *
     * @return $this
     */
    public function hidden_edit()
    {
        $this->__set('hidden_edit', true);

        return $this;
    }

    /**
     * set header
     *
     * @param  array  $header
     * @return $this
     */
    public function header($header)
    {
        $this->__set('header', $header);

        return $this;
    }

    /**
     * set header
     *
     * @param  array  $actions
     * @return $this
     */
    public function actions($actions)
    {
        $this->__set('actions', $actions);

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
