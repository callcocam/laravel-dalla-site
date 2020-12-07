<?php
/**
* Created by Claudio Campos.
* User: callcocam@gmail.com, contato@sigasmart.com.br
* https://www.sigasmart.com.br
*/
namespace SIGA\Facades;


use Illuminate\Support\Facades\Facade;

class LoadHomeRoute extends Facade
{
    public static function getFacadeAccessor(): string
    {
        return 'LoadHomeRoute';
    }
}
