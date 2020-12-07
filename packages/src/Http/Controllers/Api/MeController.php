<?php

/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace SIGA\Http\Controllers\Api;

use Illuminate\Http\Request;
use SIGA\Http\AbstractController;
use SIGA\User;

class MeController extends AbstractController
{

    public function me(Request $request)
    {
        $user = User::find($request->user()->id);
        $user->append('cover');
        $user->append('address');
        $user->append('documents');
        $user->append('contacts');
        $user->append('social_links');
        $user->append('cover');
        $tenant = $user->tenant()->first();
        $company= $tenant->companies()->first();
        $company->append('cover');
        $company->append('address');
        $company->append('documents');
        $company->append('contacts');
        $company->append('social_links');
        $company->append('cover');
        $data = $user->toArray();
        return response()->json([
            'user'=>$data,
            'tenant'=>$tenant,
            'company'=>$company,
        ]);
    }
}
