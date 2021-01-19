<?php

/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace SIGA;

use Illuminate\Database\Eloquent\Model;

class SubMenu extends Model
{

    use TableTrait;


    protected $table = "sub_menus";

    public $incrementing = false;

    protected $keyType = "string";

    protected $fillable = ['tenant_id', 'user_id','make_id', 'name', 'slug', 'ordering', 'status', 'updated_at', 'created_at'];

    public function menu()
    {

        return $this->belongsTo(Menu::class);
    }

    public function make()
    {
        return $this->belongsTo(Make::class);
    }

    public function menu_attribute()
    {
        return $this->morphOne(MenuAttribute::class, 'menuattributeable');
    }

    public function getEndpoint()
    {

        return "sub-menus";
    }


    public function getEmit()
    {
        return "menusBus";
    }
}
