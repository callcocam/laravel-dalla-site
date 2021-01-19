<?php

namespace SIGA;

use SIGA\Http\Filters\Users\UsersFilters;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use SIGA\Acl\Concerns\HasRolesAndPermissions;
use SIGA\Sluggable\SlugOptions;

class User extends Authenticatable
{
    use Notifiable, HasRolesAndPermissions, TableTrait, TraitAddition;

    protected $keyType = "string";

    public $incrementing = false;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'tenant_id', 'assets', 'name', 'username', 'slug', 'email', 'date_birth', 'gender', 'description', 'password', "status", "created_at", "updated_at"
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'date_birth' => 'date',
    ];


    /**
     * Scope a query to only include popular users.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeAsset($query, $value = 'users')
    {
        return $query->where('assets', $value);
    }

    public function notifications()
    {
        return $this->belongsToMany(Notification::class);
    }

    public function updateBy($input, $id)
    {
        if(isset($input['password']) && $input['password']){
            $input['password'] = \Hash::make($input['password']);
        }
        else{
            unset($input['password']);
        }
        return $this->finallyUpdateBy($input, $id);
    }


    public function createBy($input)
    {
        if(isset($input['password']) && $input['password']){
            $input['password'] = \Hash::make($input['password']);
        }
        else{
            unset($input['password']);
        }
        return $this->finallyCreated($input);
    }

    public function getFilter()
    {

        return UsersFilters::class;
    }


    public function getEmit()
    {
        return "companyBus";
    }


    public function getSlugOptions()
    {
        if (is_string($this->slugTo())) {
            if (in_array($this->slugTo(), $this->fillable)) {
                return SlugOptions::create()
                    ->generateSlugsFrom($this->slugFrom())
                    ->saveSlugsTo($this->slugTo());
            }
        }
    }
}
