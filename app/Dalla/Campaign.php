<?php

/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace  App\Dalla;

use SIGA\TableTrait;
use Illuminate\Database\Eloquent\Model;
use SIGA\Processors\UploadProcessor;

class Campaign extends Model
{
    use TableTrait;

    protected $keyType = "string";

    public $incrementing = false;

    protected $fillable = ['tenant_id', 'user_id', 'name', 'slug', 'card_cover', 'description', 'language', 'ordering', 'status'];

    public function getCardCoverAttribute($value)
    {

        return UploadProcessor::get($value);
    }

    public function isShow()
    {
        return false;
    }
}
