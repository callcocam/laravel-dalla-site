<?php

/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace SIGA\Http\Resources\Traits;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use SIGA\Action;
use SIGA\Card;
use SIGA\Http\Resources\Collumns\Fields\ARRAYS;
use SIGA\Http\Resources\Collumns\Fields\COVER;
use SIGA\Http\Resources\Collumns\Fields\DIALOG;
use SIGA\Http\Resources\Collumns\Fields\ID;
use SIGA\Http\Resources\Collumns\Fields\MORPH;
use SIGA\Http\Resources\Collumns\Fields\MORPHTOMANY;
use SIGA\Http\Resources\Collumns\Fields\PASSWORD;
use SIGA\Http\Resources\Collumns\Fields\RANGE;
use SIGA\Processors\AvatarProcessor;

trait TraitMethods
{

    use MorphToManyMethods, DialodMethods, CardMethods, MorphMethods, ArrayMethods;

    protected $originalValues = [];
    protected $index = "admin.%s.index";
    protected $create = "admin.%s.create";

    public function fields($resource)
    {

        return [
            ID::make('id')
        ];
    }

    public function cards($name, $resource = [])
    {
        return Card::make($name);
    }



    public function options($resource)
    {
        return [
            'itemsPerPage' => [6, 12, 25, 50, 100, 200]
        ];
    }


    public function actions($resource)
    {
        return [
            Action::make("DeleteAll")->route(sprintf('admin.%s.destroy.all', $this->getEndpoint()))
        ];
    }

    public function filters($resource)
    {
        return $this->laod_filters([]);
    }


    public function laod_actions($actions)
    {
        $temp = [];
        if ($actions) {
            foreach ($actions as $action) {
                $action->component(sprintf("Action%sComponent", Str::title($action->component)));
                $temp[] = $action;
            }
        }
        return $temp;
    }
    public function laod_filters($filters)
    {

        $temp = null;
        if ($filters) {
            foreach ($filters as $filter) {
                if ($filter instanceof RANGE) {

                    if (request()->has($filter->name)) {
                        $ranges = explode("_", request()->query($filter->name));
                        $filter->value([
                            'start' => date_carbom_format($ranges[0]),
                            'end' => date_carbom_format($ranges[1]),
                        ]);
                    } else {
                        $filter->value([
                            'start' => date_carbom_format(date("d-m-Y"))->subDays(30),
                            'end' => date_carbom_format(date("d-m-Y")),
                        ]);
                    }
                } else {
                    if (request()->has($filter->name)) {
                        $filter->value(request()->query($filter->name, isset($filter->default) ? $filter->default : null));
                    } else {
                        if (isset($filter->default)) {
                            $filter->value($filter->default);
                        } else {
                            $filter->value(null);
                        }
                    }
                }
                $filter->component(sprintf("Filter%sComponent", Str::title($filter->type)));

                $temp[$filter->name] = $filter;
            }
        }
        return $temp;
    }

    public function values($resource)
    {
        $fields = $this->fields($resource);
        $temp = [];
        foreach ($fields as $field) {
            if ($field instanceof Card) {
                $this->makeCard($field);
                $temp['cards'][$field->name] = $field;
            } else {
                if (isset($this->{$field->name})) {
                    if ($field instanceof MORPHTOMANY) {
                        $this->makeMorphToMany($field);
                    } elseif ($field instanceof COVER) {
                        $field->value(AvatarProcessor::get($this));
                    } elseif ($field instanceof PASSWORD) {
                        if (isset($field->value)) {
                            $field->value('');
                        }
                    } elseif ($field instanceof DIALOG) {
                        $this->makeDialod($field);
                    }elseif ($field instanceof ARRAYS) {
                        $this->makeArray($field, $this->{$field->name});
                    } elseif ($field instanceof MORPH) {
                        $this->makeMorph($field, $this->{$field->name});
                    } else {
                        if (isset($this->{$field->name}) && $this->{$field->name}) {
                            $field->value($this->{$field->name});
                        }
                    }
                } elseif ($field instanceof DIALOG) {
                    $this->makeDialod($field);
                } elseif ($field instanceof MORPH) {
                    $this->makeMorph($field, $this->{$field->name});
                }elseif ($field instanceof ARRAYS) {
                    $this->makeArray($field, $this->{$field->name});
                }
                $field->component(sprintf("Field%sComponent", Str::title($field->component)));
                $field->component(sprintf("Show%sComponent", Str::title($field->type)), "showComponent");
                if (!isset($field->value)) {
                    $field->value("");
                }
                $temp[$field->name] = $field;
            }
        }
        return $temp;
    }


    public function headers($fields)
    {

        $temp = [];
        foreach ($fields as $field) {
            if (!$field instanceof Card) {
                $temp[$field->name] = [
                    "label" => isset($field->label) ? $field->label : null,
                    "headerName" => isset($field->label) ? $field->label : null,
                    "hidden_index" => isset($field->hidden_index) ? $field->hidden_index : false,
                    "hidden_show" => isset($field->hidden_show) ? $field->hidden_show : false,
                    "hidden_create" => isset($field->hidden_create) ? $field->hidden_create : false,
                    "hidden_edit" => isset($field->hidden_edit) ? $field->hidden_edit : false,
                    "sortable" => isset($field->sortable) ? $field->sortable : false,
                    "filter" => isset($field->sortable) ? $field->sortable : false,
                    "width" => isset($field->width) ? $field->width : null,
                    "cellClass" => isset($field->cellClass) ? $field->cellClass : null,
                    "name" => $field->name,
                    "field" => $field->name,
                    "type" => $field->type,
                    "component" => sprintf("%sComponent", Str::title($field->component)),
                    "cellRendererFramework" => sprintf("Cell%sComponent", Str::title($field->component)),
                    "fieldRendererFramework" => sprintf("field%sComponent", Str::title($field->component)),
                    "filterRendererFramework" => sprintf("Filter%sComponent", Str::title($field->component)),
                ];
            }
        }
        return $temp;
    }


    public function navigations()
    {
        return [
            'create' => [
                'label' => 'Create',
                'color' => 'success',
                'route' => [
                    'name' => sprintf($this->create, $this->getEndpoint()),
                    'params' => $this->params()
                ]
            ]
        ];
    }

    protected function getOriginalValues()
    {

        return $this->originalValues;
    }

    private function params($defaults = [])
    {

        return array_merge(request()->query(), $defaults);
    }

    public function getModel()
    {

        return $this->resource->getModel();
    }

    public function getModelQuery($model)
    {

        return app($model)->query();
    }


    protected function tableDontExist($table)
    {
        return !\Illuminate\Support\Facades\Schema::hasTable($table);
    }
}
