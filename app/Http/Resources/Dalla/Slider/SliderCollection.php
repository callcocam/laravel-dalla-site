<?php

/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace App\Http\Resources\Dalla\Slider;

use SIGA\Http\Resources\AbstractCollection;

use App\Dalla\Slider;

class SliderCollection extends AbstractCollection
{
    public $collects = SliderResource::class;

    public $model = Slider::class;

}
