<?php

/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace  App\Dalla;

use SIGA\TableTrait;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use TableTrait;

    protected $keyType = "string";

    public $incrementing = false;

    protected $fillable = ['tenant_id', 'user_id', 'name', 'slug', 'asset', 'subtitle', 'description','language', 'status'];


    public function titleColor($name, $index = 0, $default="")
    {

        $explode = explode(" ", $name);
        if (isset($explode[$index]))
            return $explode[$index];

        return $default;
    }

    public function isShow()
    {
        return false;
    }
}
