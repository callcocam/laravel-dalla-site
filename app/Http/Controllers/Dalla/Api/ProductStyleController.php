<?php

/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */
namespace App\Http\Controllers\Dalla\Api;

use App\Dalla\ProductStyle;
use App\Http\Requests\Dalla\ProductStyleRequest;
use App\Http\Resources\Dalla\ProductStyle\ProductStyleCollection;
use App\Http\Resources\Dalla\ProductStyle\ProductStyleResource;
use SIGA\Http\AbstractController;

class ProductStyleController extends AbstractController
{

    protected $model = ProductStyle::class;

    protected $withs = [];

    protected $collection = ProductStyleCollection::class;
    protected $resources = ProductStyleResource::class;

    /**
     * Store a newly created resource in storage.
     *
     * @param  ProductStyleRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductStyleRequest $request)
    {

        return parent::save($request);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  ProductStyleRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductStyleRequest $request, $id)
    {
        return parent::save($request, $id);
    }
}
