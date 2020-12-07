<?php

/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace SIGA\Http\Resources\Collumns\Fields;

use Route;
use SIGA\Http\Resources\Collumns\AbstractFields;

class MULTIPLEUPLOAD extends AbstractFields
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

        $make->type('MultipleUpload');
        $make->hidden_index();
        $make->default([]);
        $make->value([]);
        $make->component($make->type);

        return $make;
    }

    public function route($route)
    {
        if (Route::has(sprintf("admin.%s.upload.down", $route)))
            $this->__set('remove', route(sprintf("admin.%s.upload.down", $route)));
        if (Route::has(sprintf("admin.%s.multiple.upload.up", $route)))
            $this->__set('upload', route(sprintf("admin.%s.multiple.upload.up", $route)));

        if (Route::has(sprintf("admin.%s.multiple.upload.load", $route)))
            $this->__set('load', route(sprintf("admin.%s.multiple.upload.load", $route), "_ID_"));

        return $this;
    }

    public function value($value)
    {
        $this->__set('value', $value);

        return $this;
    }
}
