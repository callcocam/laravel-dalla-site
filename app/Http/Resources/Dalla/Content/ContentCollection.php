<?php

/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace App\Http\Resources\Dalla\Content;

use SIGA\Http\Resources\AbstractCollection;

use App\Dalla\Content;

class ContentCollection extends AbstractCollection
{
    public $collects = ContentResource::class;

    public $model = Content::class;

}
