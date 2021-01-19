<?php

/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace SIGA\Http\Resources\Contact;

use SIGA\Http\Resources\AbstractCollection;

class ContactCollection extends AbstractCollection
{
    public $collects = ContactResource::class;

}
