<?php

/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace SIGA\Helpers;

class LoadMenuHelper
{


    /**
     * @var array
     */
    private $ignore = ['auth', 'store', 'remove-file', 'auto-route', 'translate', 'profile', 'roles', 'permissions'];

    /**
     * @var array
     */
    private $required = ['admin'];

    protected $Query = null;
    protected $field = "name";

    public static function make(...$parameters)
    {

        $make = new static();


        if (isset($parameters[0])) {
            $make->Query = $parameters[0];
        }

        if (isset($parameters[1])) {
            $make->field = "name";
        }


        return $make->load();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    private function load()
    {

        //$this->permission->slug_fixed = true;

        $options = [];

        foreach (\Route::getRoutes() as $route) {

            if (isset($route->action['as'])) :

                $data = explode(".", $route->action['as']);

                if ($this->getIgnore($data)) :

                    if ($this->getRequired($data)) :

                        if (!$this->getModelQuery($route->action['as'])) {
                            if (!in_array([
                                'label' => $route->action['as'],
                                'code' => $route->action['as']
                            ], $options)) {
                                array_push($options, [
                                    'label' => $route->action['as'],
                                    'code' => $route->action['as']
                                ]);
                            }
                        }

                    endif;

                endif;

            endif;
        }
        array_push($options, [
            'label' => 'home',
            'code' => 'home'
        ]);
        return $options;
    }

    private function getIgnore($value)
    {

        $result = true;

        foreach ($this->ignore as $item) {

            if (in_array($item, $value)) {

                $result = false;
            }
        }

        return $result;
    }


    private function getRequired($value)
    {

        $result = false;

        foreach ($this->required as $item) {

            if (in_array($item, $value)) {

                $result = true;
            }
        }

        return $result;
    }

    private function getModelQuery($route)
    {
        if ($this->Query) :
            return $this->Query->where($this->field, $route)->first();
        endif;
        return false;
    }
}
