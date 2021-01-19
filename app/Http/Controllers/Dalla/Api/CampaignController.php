<?php

/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */
namespace App\Http\Controllers\Dalla\Api;

use App\Dalla\Campaign;
use App\Http\Requests\Dalla\CampaignRequest;
use App\Http\Resources\Dalla\Campaign\CampaignCollection;
use App\Http\Resources\Dalla\Campaign\CampaignResource;
use SIGA\Http\AbstractController;

class CampaignController extends AbstractController
{

    protected $model = Campaign::class;

    protected $withs = [];

    protected $collection = CampaignCollection::class;
    protected $resources = CampaignResource::class;

    /**
     * Store a newly created resource in storage.
     *
     * @param  CampaignRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CampaignRequest $request)
    {

        return parent::save($request);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  CampaignRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CampaignRequest $request, $id)
    {
        return parent::save($request, $id);
    }
}
