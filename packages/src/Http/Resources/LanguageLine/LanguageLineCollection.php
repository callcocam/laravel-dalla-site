<?php

/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace SIGA\Http\Resources\LanguageLine;

use SIGA\Http\Resources\AbstractCollection;

use SIGA\LanguageLine;

class LanguageLineCollection extends AbstractCollection
{
    public $collects = LanguageLineResource::class;

    public $model = LanguageLine::class;

}
