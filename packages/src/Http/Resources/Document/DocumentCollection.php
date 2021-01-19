<?php

/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace SIGA\Http\Resources\Document;

use SIGA\Http\Resources\AbstractCollection;

class DocumentCollection extends AbstractCollection
{
    public $collects = DocumentResource::class;

}
