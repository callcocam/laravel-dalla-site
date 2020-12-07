<?php

/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace App\Http\Resources\Dalla\ProductStyle;

use SIGA\Http\Resources\AbstractCollection;

use App\Dalla\ProductStyle;

class ProductStyleCollection extends AbstractCollection
{
    public $collects = ProductStyleResource::class;

    public $model = ProductStyle::class;

}
