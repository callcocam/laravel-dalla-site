<?php

/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace App\Http\Controllers\Dalla;

use App\Dalla\Award;
use App\Http\Controllers\AbstractController;

class HomeController extends AbstractController
{


    protected $theme = 'dalla';

    public function carrousel3d()
    {

        $awards = Award::query()->where('status', self::$PUBLISHED_STATUS)->get();

        $awards->map(function ($award) {
            $award->append('cover');
        });
        return response()->json($awards);
    }
}
