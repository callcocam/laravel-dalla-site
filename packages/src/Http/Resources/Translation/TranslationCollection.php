<?php

/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace SIGA\Http\Resources\Translation;

use SIGA\Http\Resources\AbstractCollection;
use SIGA\Http\Resources\Collumns\Fields\SEARCH;
use SIGA\Translation;

class TranslationCollection extends AbstractCollection
{
    public $collects = TranslationResource::class;

    public $model = Translation::class;

    public function filters($resource)
    {
        return [
            SEARCH::make('search'),
        ];
    }
}
