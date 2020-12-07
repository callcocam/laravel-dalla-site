<?php

/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com
 * https://www.sigasmart.com.br
 */

namespace SIGA;

use Illuminate\Support\Facades\Route;
use SIGA\Processors\AvatarProcessor;
use SIGA\Processors\CoverProcessor;
use SIGA\Processors\GalleryProcessor;
use SIGA\Processors\UploadProcessor;

trait Attributes
{

    protected $component;

    protected function isShow()
    {

        return false;
       // return
          //  Route::has(sprintf($this->show, $this->getEndpoint())) &&
          //  !\Gate::denies(sprintf($this->show, $this->getEndpoint()));
    }


    protected function isEdit()
    {

        return
            Route::has(sprintf($this->edit, $this->getEndpoint())) &&
            !\Gate::denies(sprintf($this->edit, $this->getEndpoint()));
    }


    protected function isDestroy()
    {

        return
            Route::has(sprintf($this->destroy, $this->getEndpoint())) &&
            !\Gate::denies(sprintf($this->destroy, $this->getEndpoint()));
    }
    /**
     * @return \Illuminate\Config\Repository|mixed|string
     */
    public function getAvatarAttribute()
    {
        return AvatarProcessor::get($this);
    }

    public function  getCompanyAttribute()
    {

        return $this->company();
    }

    public function  getTenantAttribute()
    {

        return $this->tenant();
    }
    /**
     * @return \Illuminate\Config\Repository|mixed|string
     */
    public function getCoverAttribute()
    {
        return CoverProcessor::get($this);
    }


    /**
     * @return \Illuminate\Config\Repository|mixed|string
     */
    public function getGalleryAttribute()
    {
        return GalleryProcessor::get($this);
    }


    public function getComponentAttribute()
    {
        return  $this->component;
    }

    public function setComponentAttribute($value)
    {
        $this->component = $value;
    }

    public function getActionsAttribute()
    {


        $actions = [];
        if (!$this->getKey())
            return $this->navigations();

        if ($this->isShow()) {
            $actions['show'] = [
                'name' => sprintf($this->show, $this->getEndpoint()),
                'label' => "Show",
                'size' => "small",
                'icon' => "icon-eye",
                'class' => "mr-2",
                'color' => "warning",
                'api' => route(sprintf($this->show, $this->getEndpoint()), $this->params([$this->getKeyName() => $this->getKey()])),
                'params' =>  $this->params([$this->getKeyName() => $this->getKey()])
            ];
        }

        if ($this->isEdit()) {
            $actions['edit'] = [
                'name' => sprintf($this->edit, $this->getEndpoint()),
                'label' => "Edit",
                'size' => "small",
                'icon' => "icon-edit",
                'class' => "mr-2",
                'color' => "dark",
                'api' => route(sprintf($this->edit, $this->getEndpoint()), $this->params([$this->getKeyName() => $this->getKey()])),
                'params' =>  $this->params([$this->getKeyName() => $this->getKey()])
            ];
        }

        if ($this->isDestroy()) {
            $actions['destroy'] = [
                'name' => sprintf($this->destroy, $this->getEndpoint()),
                'label' => "Destroy",
                'size' => "small",
                'icon' => "icon-trash",
                'class' => "mr-2",
                'color' =>  "danger",
                'api' => route(sprintf($this->destroy, $this->getEndpoint()), $this->params([$this->getKeyName() => $this->getKey()])),
                'params' => $this->params([$this->getKeyName() => $this->getKey()])
            ];
        }

        return $actions;
    }
}
