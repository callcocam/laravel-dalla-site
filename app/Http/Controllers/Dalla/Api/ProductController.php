<?php

/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */
namespace App\Http\Controllers\Dalla\Api;

use App\Dalla\Product;
use App\Http\Requests\Dalla\ProductRequest;
use App\Http\Resources\Dalla\Product\ProductCollection;
use App\Http\Resources\Dalla\Product\ProductResource;
use SIGA\Http\AbstractController;

class ProductController extends AbstractController
{

    protected $model = Product::class;

    protected $withs = [];

    protected $collection = ProductCollection::class;
    protected $resources = ProductResource::class;

    /**
     * Store a newly created resource in storage.
     *
     * @param  ProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {

        return parent::save($request);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  ProductRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, $id)
    {
        return parent::save($request, $id);
    }
}
