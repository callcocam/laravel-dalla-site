<?php

/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace SIGA\Http\Resources\Collumns\Fields;

use Illuminate\Support\Facades\Route;
use SIGA\Http\Resources\Collumns\AbstractFields;

class DIALOG extends AbstractFields
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

        $make->type('Dialog');
        $make->component($make->type);
        $make->default('');
        $make->buttonAccept(false);
        $make->hidden_index();
        $make->hidden_show();

        return $make;
    }

    public function buttonAccept($buttonAccept)
    {
        $this->__set('buttonAccept', $buttonAccept);
        return $this;
    }

    public function route($route, $id=null)
    {
        $this->buttonAccept(true);
        if ($id) {
            if (Route::has(sprintf("admin.%s.update", $route)))
                $this->__set('route', route(sprintf("admin.%s.update", $route), $id));
        } else {
            if (Route::has(sprintf("admin.%s.store", $route)))
                $this->__set('route', route(sprintf("admin.%s.store", $route)));
        }
        return $this;
    }
}
