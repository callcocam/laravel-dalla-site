<?php

/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com
 * https://www.sigasmart.com.br
 */

namespace SIGA;

trait Select
{

    protected $source;


    /**
     * Scope a query to only include popular users.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeLang($query)
    {
        return $query->where('language', app()->getLocale());
    }

    public function log()
    {

        return $this->morphOne(Log::class, 'logable');
    }


    public function author()
    {
        $user = $this->user()->first();
        if ($user) {
            $user->append('avatar');
            $user->append('created_mm_dd_yyyy');
        }

        return $user;
    }

    /**
     * @return mixed
     */
    public function tenant()
    {
        return $this->belongsTo(Tenant::class);
    }

    /**
     * @return mixed
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }


    public function tenant_users()
    {
        return $this->hasMany(User::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function file()
    {
        return $this->morphMany(File::class, 'fileable');
    }


    public function gallery()
    {

        return $this->morphMany(Gallery::class, 'gallerieable')->select(['id', 'name', 'slug', 'description', 'width', 'height', 'status']);
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function getQuery()
    {

        return parent::query();
    }

    public function getSources()
    {
        if (!$this->source) {
            $this->source = $this->query();
        }
        return $this->source;
    }

    public function findById($id, $columns = ['*'])
    {

        $result = $this->where([
            'id' => $id
        ])->first($columns);

        if ($result) {

            return $result;
        }
        return FALSE;
    }


    public function findBySlug($id, $columns = ['*'])
    {

        $result = $this->where([
            'slug' => $id
        ])->first($columns);

        if ($result) {

            return $result;
        }
        return FALSE;
    }

    public function findAll($columns = ['*'])
    {
        return parent::all($columns);
    }

    public function findBy($where, $columns = ["*"])
    {

        $result = $this->select($columns)->where($where);

        if ($result) {
            /**
             * @var $result Builder
             */
            return $result;
        }
        return FALSE;
    }
}
