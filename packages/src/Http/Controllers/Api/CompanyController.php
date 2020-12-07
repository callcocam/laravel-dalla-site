<?php

/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace SIGA\Http\Controllers\Api;

use Illuminate\Http\Request;
use SIGA\Company;
use SIGA\Http\AbstractController;
use SIGA\Http\Requests\CompanyRequest;
use SIGA\Http\Resources\TenantCollection;
use SIGA\Http\Resources\TenantResource;
use SIGA\Tenant;

class CompanyController extends AbstractController
{

    protected $model = Tenant::class;

    protected $withs = [];

    protected $collection = TenantCollection::class;

    protected $resources = TenantResource::class;

    public function index(Request $request)
    {
        return new $this->resources(Tenant::find(get_tenant_id()));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CompanyRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CompanyRequest $request)
    {
        $this->model = Company::class;

        return parent::save($request, $request->input('id'));
    }
}
