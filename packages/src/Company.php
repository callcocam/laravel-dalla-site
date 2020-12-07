<?php

/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace SIGA;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use TableTrait, TraitAddition;

    public $incrementing = false;

    protected $keyType = "string";

    protected $fillable = ['id', 'tenant_id', 'name', 'fantasy', 'slug', 'email', 'phone','preview', 'status', 'description', 'updated_at', 'created_at'];

    public function getEndpoint()
    {

        return "companies";
    }

    public function getEmit()
    {
        return "companyBus";
    }


    public function service()
    {
        return $this->morphOne(Service::class, 'serviceable');
    }

}
