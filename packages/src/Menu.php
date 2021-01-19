<?php

/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace SIGA;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{

    use TableTrait;

    public $incrementing = false;

    protected $keyType = "string";

    protected $fillable = ['tenant_id', 'user_id','make_id', 'name', 'slug', 'ordering', 'status', 'updated_at', 'created_at'];

    public function submenus()
    {
        return $this->belongsToMany(SubMenu::class)->with(['menu_attribute'])->orderBy('ordering', 'DESC');
    }

    public function make()
    {
        return $this->belongsTo(Make::class);
    }


    public function menu_attribute()
    {
        return $this->morphOne(MenuAttribute::class, 'menuattributeable');
    }


    public function getEmit()
    {
        return "menusBus";
    }
}
