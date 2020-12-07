<?php

/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */
namespace SIGA\Http\Controllers\Api;

use Illuminate\Filesystem\Filesystem;
use SIGA\Translation;
use SIGA\Http\Requests\TranslationRequest;
use SIGA\Http\Resources\Translation\TranslationCollection;
use SIGA\Http\Resources\Translation\TranslationResource;
use SIGA\Http\AbstractController;

class TranslationController extends AbstractController
{

    protected $model = Translation::class;

    protected $withs = [];

    protected $collection = TranslationCollection::class;
    protected $resources = TranslationResource::class;

    /**
     * Store a newly created resource in storage.
     *
     * @param  TranslationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TranslationRequest $request)
    {

        return parent::save($request);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  TranslationRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TranslationRequest $request, $id)
    {
        return parent::save($request, $id);
    }

    /**
     * @param Filesystem $filesystem
     * @return string
     * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
     */
    public function language(Filesystem $filesystem)
    {
        $languages = app($this->model)->where('language',app()->getLocale())->get();
        $data = [];
        if($languages){

            foreach ($languages as $language) {
                $data[$language->name] = $language->description;
            }
        }
        return response()->json($data);
    }
}
