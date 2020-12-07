<?php

/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace SIGA\Http\Resources\User;

use SIGA\Action;
use SIGA\Http\Resources\AbstractCollection;
use SIGA\Http\Resources\Collumns\Fields\RANGE;
use SIGA\Http\Resources\Collumns\Fields\SEARCH;
use SIGA\Http\Resources\Collumns\Fields\STATUS;

class UserCollection extends AbstractCollection
{

    //protected $template = "AgGridComponent";
    public $collects = UserResource::class;

    public function filters($resource)
    {
        return [
            STATUS::make('status')->options([
                ['label' => 'All', 'value' => 'all'],
                ['label' => 'draft', 'value' => 'draft'],
                ['label' => 'published', 'value' => 'published']
            ])->default('all'),
            SEARCH::make('search'),
            RANGE::make('range'),
        ];
    }


    public function actions($resource)
    {
        return [
            Action::make("DeleteAll")->icon('TrashIcon')->route('admin.users.destroy.all'),
            Action::make("ExportAll")->icon('FileIcon')->route('admin.users.export'),
        ];
    }
}
