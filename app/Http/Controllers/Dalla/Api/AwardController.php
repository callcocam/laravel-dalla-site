<?php

/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */
namespace App\Http\Controllers\Dalla\Api;

use App\Dalla\Award;
use App\Http\Requests\Dalla\AwardRequest;
use App\Http\Resources\Dalla\Award\AwardCollection;
use App\Http\Resources\Dalla\Award\AwardResource;
use SIGA\Http\AbstractController;

class AwardController extends AbstractController
{

    protected $model = Award::class;

    protected $withs = [];

    protected $collection = AwardCollection::class;
    protected $resources = AwardResource::class;

    /**
     * Store a newly created resource in storage.
     *
     * @param  AwardRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AwardRequest $request)
    {

        return parent::save($request);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  AwardRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AwardRequest $request, $id)
    {
        return parent::save($request, $id);
    }
}
