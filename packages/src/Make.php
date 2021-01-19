<?php

/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace SIGA;

use Illuminate\Database\Eloquent\Model;

class Make extends Model
{

    use TableTrait;

    public $incrementing = false;

    protected $keyType = "string";

    protected $fillable = [
        'tenant_id', 'user_id', "name", "slug", "path", "app_path","app_root", "app_theme", "app_model", "app_controller", "app_route", "app_table",  "app_action",  "app_method",
        'index_component',
        'list_component',
        'create_component',
        'show_component',
        'edit_component',
        'destroy_component',
        'description',
        'status', 'updated_at', 'created_at'
    ];

    public function menu()
    {

        return $this->hasOne(Menu::class);
    }


    public function submenu()
    {

        return $this->hasOne(SubMenu::class);
    }
}
