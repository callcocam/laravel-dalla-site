<?php

/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace SIGA\Http\Resources\Collumns\Fields;

use Illuminate\Support\Str;
use SIGA\Http\Resources\Collumns\AbstractFields;

class MORPHTOMANY extends AbstractFields
{

    /**
     * Define a polymorphic, inverse many-to-many relationship.
     *
     * @param  string  $related
     * @param  string  $name
     * @param  string|null  $table
     * @param  string|null  $foreignPivotKey
     * @param  string|null  $relatedPivotKey
     * @param  string|null  $parentKey
     * @param  string|null  $relatedKey
     * @return \Illuminate\Database\Eloquent\Relations\MorphToMany
     */
    public static function make(...$parameters)
    {

        $make = new static(...$parameters);

        $args = func_num_args();
        $make->table(null);
        $make->foreignPivotKey(null);
        $make->relatedPivotKey(null);
        $make->parentKey(null);
        $make->relatedKey(null);
        $make->inverse(false);

        switch ($args) {
            case 1:
                $name = class_basename($parameters[0]);
                $make->label(class_basename($parameters[0]));
                $make->name(class_basename($parameters[0]));
                $make->related($parameters[0]);
                break;
            case 2:
                $name = class_basename($parameters[1]);
                $make->label($parameters[0]);
                $make->name($name, true);
                $make->related($parameters[1]);
                break;
        }

        $make->type('morphToMany');
        $make->default('');

        return $make;
    }

    public function options(array $options)
    {
        $this->__set('options', $options);

        return $this;
    }

    /**
     * set related
     *
     * @param string $related
     * @return void
     */
    public function related($related)
    {
        $this->__set('related', $related);
    }

    /**
     * set name field
     *
     * @param string $name
     * @return $this
     */
    public function name($name)
    {
        $this->__set('name', sprintf("%sable", strtolower($name)));
    }

    /**
     * set table
     *
     * @param string $table
     * @return $this
     */
    public function table($table)
    {
        $this->__set('table', $table);
    }

    /**
     * set foreignPivotKey
     *
     * @param srting $foreignPivotKey
     * @return $this
     */
    public function foreignPivotKey($foreignPivotKey)
    {
        $this->__set('foreignPivotKey', $foreignPivotKey);
    }

    /**
     * set relatedPivotKey
     *
     * @param string $relatedPivotKey
     * @return $this
     */
    public function relatedPivotKey($relatedPivotKey)
    {
        $this->__set('relatedPivotKey', $relatedPivotKey);
    }

    /**
     * set parentKey
     *
     * @param string $parentKey
     * @return $this
     */
    public function parentKey($parentKey)
    {
        $this->__set('parentKey', $parentKey);
    }

    /**
     * set relatedKey
     *
     * @param string $relatedKey
     * @return $this
     */
    public function relatedKey($relatedKey)
    {
        $this->__set('relatedKey', $relatedKey);
    }

    /**
     * set inverse
     *
     * @param string $inverse
     * @return $this
     */
    public function inverse($inverse)
    {
        $this->__set('inverse', $inverse);
    }
}
