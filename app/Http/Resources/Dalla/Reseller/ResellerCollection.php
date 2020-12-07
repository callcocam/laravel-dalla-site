<?php

/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace App\Http\Resources\Dalla\Reseller;

use SIGA\Http\Resources\AbstractCollection;

use App\Dalla\Reseller;

class ResellerCollection extends AbstractCollection
{
    public $collects = ResellerResource::class;

    public $model = Reseller::class;

}
