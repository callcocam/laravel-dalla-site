<?php

/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */
namespace App\Http\Controllers\Dalla;

use App\Dalla\EventEdition;
use App\Http\Controllers\AbstractController;

class EventEditionController extends AbstractController
{

    protected $model = EventEdition::class;
    protected $template = 'eventedition';
    protected $theme = 'dalla';

}
