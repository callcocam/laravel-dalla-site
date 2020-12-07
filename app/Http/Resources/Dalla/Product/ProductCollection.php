<?php

/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace App\Http\Resources\Dalla\Product;

use SIGA\Http\Resources\AbstractCollection;

use App\Dalla\Product;

class ProductCollection extends AbstractCollection
{
    public $collects = ProductResource::class;

    public $model = Product::class;

}
