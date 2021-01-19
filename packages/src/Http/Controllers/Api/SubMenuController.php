<?php

/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace SIGA\Http\Controllers\Api;

use SIGA\Events\SubMenuEvent;
use SIGA\SubMenu;
use SIGA\Http\AbstractController;
use SIGA\Http\Requests\SubMenuRequest;
use SIGA\Http\Resources\Menu\SubMenuCollection;
use SIGA\Http\Resources\Menu\SubMenuResource;

class SubMenuController extends AbstractController
{

    protected $model = SubMenu::class;

    protected $event = SubMenuEvent::class;

    protected $collection = SubMenuCollection::class;

    protected $resources = SubMenuResource::class;

    /**
     * Store a newly created resource in storage.
     *
     * @param  SubMenuRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SubMenuRequest $request)
    {

        return parent::save($request);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  SubMenuRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SubMenuRequest $request, $id)
    {
        return parent::save($request, $id);
    }
}
