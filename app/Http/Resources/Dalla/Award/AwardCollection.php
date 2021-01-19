<?php

/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace App\Http\Resources\Dalla\Award;

use SIGA\Http\Resources\AbstractCollection;

use App\Dalla\Award;

class AwardCollection extends AbstractCollection
{
    public $collects = AwardResource::class;

    public $model = Award::class;

}
