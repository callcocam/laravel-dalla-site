<?php
/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */
namespace SIGA;

use Illuminate\Database\Eloquent\Model;


class Tenant extends Model
{
    use TableTrait;

    protected $keyType = "string";

    public $incrementing = false;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'slug','domain','main','status', 'updated_at','created_at',
    ];

    public function __construct(array $attributes = [])
    {
       //\SIGA\Tenant\Facades\Tenant::disable();

        parent::__construct($attributes);
    }

    public function companies(){

        return $this->hasOne(Company::class);

    }


    public function getComponentAttribute()
    {
        return 'CompanyComponent';
    }
}
