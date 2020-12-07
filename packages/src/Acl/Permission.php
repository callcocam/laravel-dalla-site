<?php

/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace SIGA\Acl;

use Illuminate\Database\Eloquent\Model;
use SIGA\Acl\Concerns\RefreshesPermissionCache;
use SIGA\Acl\Contracts\Permission as PermissionContract;
use SIGA\Http\Filters\Permissions\PermissionFilters;
use SIGA\TableTrait;

class Permission extends Model implements PermissionContract
{
    use RefreshesPermissionCache, TableTrait;

    public $incrementing = false;

    protected $keyType = "string";
    /**
     * The attributes that are fillable via mass assignment.
     *
     * @var array
     */
    protected $fillable = ['tenant_id', 'user_id', 'name', 'slug', 'groups', 'description', 'status', 'created_at', 'updated_at'];

    /**
     * Permissions can belong to many roles.
     *
     * @return mixed
     */
    public function roles()
    {
        return $this->belongsToMany(config('acl.models.role'))->withTimestamps();
    }


    public function getFilter()
    {

        return PermissionFilters::class;
    }


    protected  function slugTo()
    {
        return false;
    }
}
