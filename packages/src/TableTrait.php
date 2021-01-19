<?php

/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace SIGA;

use Illuminate\Database\Eloquent\SoftDeletes;
use SIGA\Sluggable\HasSlug;
use SIGA\Sluggable\SlugOptions;
use SIGA\Tenant\BelongsToTenants;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Str;

trait TableTrait
{

    use SoftDeletes, BelongsToTenants, HasSlug, Attributes, Select, Helper, Create, Update, Delete;

    protected $template = "DefaultComponet";

    protected $active;

    protected $endpoint;


    protected $index = "admin.%s.index";
    protected $show = "admin.%s.show";
    protected $create = "admin.%s.create";
    protected $edit = "admin.%s.edit";
    protected $update = "admin.%s.update";
    protected $destroy = "admin.%s.destroy";

    public function getSearchFields()
    {

        return ['name'];
    }


    public function getTemplate()
    {

        return $this->template;
    }

    public function setTemplate($template)
    {
        $this->template = $template;

        return $this;
    }


    public function getSearchDate()
    {

        return 'created_at';
    }

    public function getEmit()
    {
        return false;
    }

    public function getFilter()
    {

        return null;
    }

    protected  function slugTo()
    {
        return "slug";
    }

    protected  function slugFrom()
    {
        return 'name';
    }


    public function afterLast($name, $default = " ")
    {
        $firstText =  Str::of($name)->beforeLast($default);

        $lastText = Str::of($name)->afterLast($default);

        if ($firstText == $lastText) {
            return "";
        }
        return $lastText;
    }


    public function beforeLast($name, $default = " ")
    {
        $firstText =  Str::of($name)->beforeLast($default);

        return $firstText;
    }

    protected  function setActive($active = "active")
    {
        $this->active = $active;

        return $this;
    }


    public  function isActive($key, $active = "active", $desactive = "")
    {

        if (!(int) $key) {
            return $active;
        }
        return $desactive;
    }

    /**
     * set auto filter
     *
     * @param Builder $builder
     * @param Request $request
     * @param array $filters
     * @return void
     */
    public function scopeFilter(Builder $builder, Request $request, array $filters = [])
    {

        if ($this->getFilter()) {

            return app($this->getFilter(), compact('request'))->add($filters)->filter($builder);
        }

        return $builder;
    }

    /**
     * navigations function
     *
     * @return void
     */
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

    public function getSlugOptions()
    {
        if (is_string($this->slugTo())) {
            if (in_array($this->slugTo(), $this->fillable)) {
                return SlugOptions::create()
                    ->allowDuplicateSlugs()
                    ->generateSlugsFrom($this->slugFrom())
                    ->saveSlugsTo($this->slugTo());
            }
        }
    }

    public function getEndpoint()
    {
        return $this->getTable();
    }

    /**
     * executa antes de finalizar a operações
     *
     * @param mixed $data
     * @return void
     */
    public function preAction($data)
    {
    }

    /**
     * executa depois de finalizar a operações
     *
     * @param mixed $data
     * @return void
     */
    public function posAction($data)
    {

        //SITEMA DE TAGS
        // $this->initTags($data);
        //RELACIONA UMA CAPA COM O REGISTRO USER OU POST ETC...
        $this->initCover($data);
        //RELACIONA UM ADDRESS COM O REGISTRO USER OU CLIENT ETC...
        $this->initAddress($data);
        //RELACIONA OS ROLES COM USERS
        $this->initRoles($data);
        //RELACIONA AS PERMISSIONS COM AS ROLES
        $this->initPermissions($data);
        //RELACIONA OS MENUS COM SUB-MENUS
        $this->initMenus($data);

        return $data;
    }

    /**
     * Relaciona uma image com o registro
     *
     * @param string $input
     * @return void
     */
    protected function initCover(&$input)
    {

        if (!isset($input['cover'])) {

            return $input;
        }

        if (is_string($input['cover'])) {
            /**
             * @var $fileExist MorphOne
             */
            $fileExist = $this->model->file();
            if ($fileExist->first()) :
                $fileExist->update([
                    'name' => $input['cover']
                ]);
            else :
                $fileExist->create([
                    'name' => $input['cover']
                ]);
            endif;
        }
        return $input;
    }


    /**
     * Relaciona um address com o register user ou client etc...
     *
     * @param mixed $input
     * @return void
     */
    protected function initAddress(&$input)
    {

        if (!isset($input['address'])) {

            return $input;
        }

        $data = $input;

        unset($data['id'], $data['busy']);

        array_push($this->fillable, 'company_id', 'uuid');
        /**
         * @var $fileExist MorphOne
         */
        $addressExist = $this->model->address();

        $data = $input['address'];

        unset($data['busy'], $data['successful'], $data['errors'], $data['originalData']);

        if ($addressExist->first()) :
            $current = $addressExist->first()->toArray();
            $addressExist->update(array_merge($current, $data));
        else :
            $addressExist->create($data);
        endif;

        return $input;
    }

    /**
     * Relaciona as permissões com os niveis de acesso
     *
     * @param mixed $input
     * @return void
     */
    protected function initPermissions(&$input)
    {
        if (!isset($input['permissions'])) {

            return $input;
        }

        //ADD PERMISSIONS
        $this->model->permissions()->sync($input['permissions']);

        return $input;
    }

    /**
     * Relaciona os niveis de acesso com os usuário
     *
     * @param mixed $input
     * @return void
     */
    protected function initRoles(&$input)
    {
        if (!isset($input['roles'])) {

            return $input;
        }
        //REMOVE E ADCIONA TODAS AS ROLES
        $this->model->roles()->sync($input['roles']);

        return $input;
    }


    /**
     * Relaciona os niveis de acesso com os usuário
     *
     * @param mixed $input
     * @return void
     */
    protected function initMenus(&$input)
    {
        if (!isset($input['submenus'])) {

            return $input;
        }
        //REMOVE E ADCIONA TODAS AS ROLES
        $this->model->submenus()->sync($input['submenus']);

        return $input;
    }


    private function params($defaults = [])
    {

        return array_merge(request()->query(), $defaults);
    }
}
