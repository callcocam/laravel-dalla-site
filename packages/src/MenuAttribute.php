<?php

/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace SIGA;

use Illuminate\Database\Eloquent\Model;

class MenuAttribute extends Model
{

    use TableTrait;

    public $incrementing = false;

    protected $keyType = "string";

    protected $fillable = ['tenant_id', 'user_id', 'url', 'icon', 'i18n', 'target', 'description', 'status', 'updated_at', 'created_at'];

    public function makeable()
    {

        return $this->morphTo();
    }
}
