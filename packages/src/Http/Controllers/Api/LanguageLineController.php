<?php

/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */
namespace SIGA\Http\Controllers\Api;

use SIGA\LanguageLine;
use SIGA\Http\Requests\LanguageLineRequest;
use SIGA\Http\Resources\LanguageLine\LanguageLineCollection;
use SIGA\Http\Resources\LanguageLine\LanguageLineResource;
use SIGA\Http\AbstractController;

class LanguageLineController extends AbstractController
{

    protected $model = LanguageLine::class;

    protected $withs = [];

    protected $collection = LanguageLineCollection::class;
    protected $resources = LanguageLineResource::class;

    /**
     * Store a newly created resource in storage.
     *
     * @param  LanguageLineRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LanguageLineRequest $request)
    {

        return parent::save($request);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  LanguageLineRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(LanguageLineRequest $request, $id)
    {
        return parent::save($request, $id);
    }
}
