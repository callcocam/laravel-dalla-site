<?php

/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace SIGA\Http\Resources\Make;

use SIGA\Http\Resources\AbstractResource;
use SIGA\Http\Resources\Collumns\Fields\ACTION;
use SIGA\Http\Resources\Collumns\Fields\CHILD;
use SIGA\Http\Resources\Collumns\Fields\COVER;
use SIGA\Http\Resources\Collumns\Fields\DIALOG;
use SIGA\Http\Resources\Collumns\Fields\ID;
use SIGA\Http\Resources\Collumns\Fields\SELECT;
use SIGA\Http\Resources\Collumns\Fields\STATUS;
use SIGA\Http\Resources\Collumns\Fields\TEXT;

class MakeResource extends AbstractResource
{

    public function fields($resource)
    {

        $fields = [
            ID::make('id')->hidden_index(),
            TEXT::make('name'),
            TEXT::make('path')->hidden_index(),
            TEXT::make('app_root')->default('app')->hidden_index(),
            TEXT::make('Pasta Da App','app_path')->default('App')->hidden_index(),
            TEXT::make('app_theme')->hidden_index(),
            TEXT::make('app_model')->hidden_index(),
            TEXT::make('app_controller')->hidden_index(),
            TEXT::make('app_route')->hidden_index(),
            TEXT::make('app_table')->hidden_index(),
            SELECT::make('app_method')->default('crud')->options([
                ['code' => 'crud', 'label' => 'crud'],
                ['code' => 'get', 'label' => 'get'],
                ['code' => 'post', 'label' => 'post'],
                ['code' => 'put', 'label' => 'put'],
                ['code' => 'delete', 'label' => 'delete']
            ])->hidden_index(),
            CHILD::make('Table Describe', 'app_describe')->value($this->describeTable())->hidden_index(),
            CHILD::make('Table Menu', 'menu')->hidden_index(),
            STATUS::make('status'),
            DIALOG::make('Editar as templates do app','components')->value(
                [
                    ID::make('id')->hidden_index(),
                    ID::make('name')->hidden_index(),
                    ID::make('path')->hidden_index(),
                    ID::make('app_root')->hidden_index(),
                    ID::make('app_path')->hidden_index(),
                    TEXT::make('index_component')->hidden_index(),
                    TEXT::make('list_component')->hidden_index(),
                    TEXT::make('edit_component')->hidden_index(),
                    TEXT::make('show_component')->hidden_index(),
                    TEXT::make('destroy_component')->hidden_index(),
                ]
            )->route('makes', $this->id)->hidden_create(),
            ACTION::make('actions')->hidden_edit()
        ];

        return $fields;
    }


    protected function describeTable()
    {
        if (!$this->app_table)
            return [];

        if ($this->tableDontExist($this->app_table)) {
            return [];
        }
        $columns = \Illuminate\Support\Facades\DB::select("DESC {$this->app_table}");

        $rows = collect($columns)->map(function ($column) {
            return get_object_vars($column);
        });

        return $rows;
    }
}
