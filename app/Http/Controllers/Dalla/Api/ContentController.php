<?php

/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */
namespace App\Http\Controllers\Dalla\Api;

use App\Dalla\Content;
use App\Http\Requests\Dalla\ContentRequest;
use App\Http\Resources\Dalla\Content\ContentCollection;
use App\Http\Resources\Dalla\Content\ContentResource;
use SIGA\Http\AbstractController;

class ContentController extends AbstractController
{

    protected $model = Content::class;

    protected $withs = [];

    protected $collection = ContentCollection::class;
    protected $resources = ContentResource::class;

    /**
     * Store a newly created resource in storage.
     *
     * @param  ContentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContentRequest $request)
    {

        return parent::save($request);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  ContentRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ContentRequest $request, $id)
    {
        return parent::save($request, $id);
    }
}
