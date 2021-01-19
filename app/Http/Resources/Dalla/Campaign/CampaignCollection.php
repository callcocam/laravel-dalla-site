<?php

/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace App\Http\Resources\Dalla\Campaign;

use SIGA\Http\Resources\AbstractCollection;

use App\Dalla\Campaign;

class CampaignCollection extends AbstractCollection
{
    public $collects = CampaignResource::class;

    public $model = Campaign::class;

}
