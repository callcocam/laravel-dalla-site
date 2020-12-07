<?php

/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace SIGA\Http\Controllers\Api;

use Illuminate\Http\Request;
use SIGA\Http\AbstractController;
use SIGA\Http\Requests\UserRequest;
use SIGA\Http\Resources\Profile\ProfileResource;
use SIGA\User;

class ProfileController extends AbstractController
{

    protected $model = User::class;

    protected $withs = [];

    protected $resources = ProfileResource::class;

    public function index(Request $request)
    {
        return parent::show($request->user()->id);
    }

    public function store(UserRequest $userRequest){

        return parent::save($userRequest, $userRequest->get('id'));
    }
}
