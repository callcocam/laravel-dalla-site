<?php

/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace App\Http\Controllers\Dalla;

use App\Dalla\Campaign;
use App\Http\Controllers\AbstractController;

class CampaignController extends AbstractController
{

    protected $template = 'campaign';
    protected $theme = 'dalla';
    protected $model = Campaign::class;

    public function carrousel3d($slug)
    {
        $data = [];
        $campaigns = app(Campaign::class)->query()->where('slug', $slug)->first();
        if ($campaigns) {
            $data = $campaigns->append('gallery');
            return response()->json($data->gallery);
        }
        return response()->json($data);
    }
}
