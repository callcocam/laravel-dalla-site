<?php

/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace SIGA\Http\Controllers\Api;

use SIGA\Acl\Permission;
use SIGA\Http\AbstractController;
use SIGA\Http\Requests\PermissionRequest;
use SIGA\Http\Resources\Permission\PermissionCollection;
use SIGA\Http\Resources\Permission\PermissionResource;

class PermissionController extends AbstractController
{

    protected $model = Permission::class;

    protected $collection = PermissionCollection::class;

    protected $resources = PermissionResource::class;

     /**
     * Store a newly created resource in storage.
     *
     * @param  PermissionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PermissionRequest $request)
    {

        return parent::save($request);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  PermissionRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PermissionRequest $request, $id)
    {
        return parent::save($request, $id);
    }
}
