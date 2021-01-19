<?php

/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace SIGA\Http\Controllers\Api;

use SIGA\Http\AbstractController;
use SIGA\Http\Requests\UserRequest;
use SIGA\Http\Resources\User\UserCollection;
use SIGA\Http\Resources\User\UserResource;
use SIGA\User;

class UserController extends AbstractController
{

    protected $model = User::class;

    protected $withs = [];

    protected $collection = UserCollection::class;
    protected $resources = UserResource::class;

    /**
     * Store a newly created resource in storage.
     *
     * @param  UserRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {

        return parent::save($request);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  UserRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, $id)
    {
        return parent::save($request, $id);
    }

    public function getModel()
    {

        if (is_string($this->model))
            $this->model = app($this->model)->query();

        return $this->model;
    }
}
