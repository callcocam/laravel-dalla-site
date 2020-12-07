<?php

/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */
namespace App\Http\Controllers\Dalla\Api;

use App\Dalla\Reseller;
use App\Http\Requests\Dalla\ResellerRequest;
use App\Http\Resources\Dalla\Reseller\ResellerCollection;
use App\Http\Resources\Dalla\Reseller\ResellerResource;
use SIGA\Http\AbstractController;

class ResellerController extends AbstractController
{

    protected $model = Reseller::class;

    protected $withs = [];

    protected $collection = ResellerCollection::class;
    protected $resources = ResellerResource::class;

    /**
     * Store a newly created resource in storage.
     *
     * @param  ResellerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ResellerRequest $request)
    {

        return parent::save($request);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  ResellerRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ResellerRequest $request, $id)
    {
        return parent::save($request, $id);
    }
}
