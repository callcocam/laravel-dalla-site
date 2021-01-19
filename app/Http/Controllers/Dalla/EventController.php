<?php

/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace App\Http\Controllers\Dalla;

use App\Dalla\Event;
use App\Http\Controllers\AbstractController;

class EventController extends AbstractController
{

   protected $template = 'events';
   protected $theme = 'dalla';
   protected $model = Event::class;

}
