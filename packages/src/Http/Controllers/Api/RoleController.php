<?php

/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace SIGA\Http\Controllers\Api;

use SIGA\Acl\Role;
use SIGA\Http\AbstractController;
use SIGA\Http\Requests\RoleRequest;
use SIGA\Http\Resources\Role\RoleCollection;
use SIGA\Http\Resources\Role\RoleResource;

class RoleController extends AbstractController
{

    protected $model = Role::class;

    protected $collection = RoleCollection::class;

    protected $resources = RoleResource::class;

     /**
     * Store a newly created resource in storage.
     *
     * @param  RoleRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RoleRequest $request)
    {

        return parent::save($request);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  RoleRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RoleRequest $request, $id)
    {
        return parent::save($request, $id);
    }
}
