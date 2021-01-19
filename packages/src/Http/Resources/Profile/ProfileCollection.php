<?php

/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace SIGA\Http\Resources\Profile;

use SIGA\Http\Resources\AbstractCollection;
use SIGA\User;

class ProfileCollection extends AbstractCollection
{
    public $collects = ProfileResource::class;

    public $model = User::class;


}
