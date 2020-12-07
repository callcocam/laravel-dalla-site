<?php
/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace  SIGA;

use SIGA\TableTrait;
use Illuminate\Database\Eloquent\Model;
use SIGA\Http\Filters\Translation\TranslationFilters;

class Translation extends Model
{
    use TableTrait;

    protected $keyType = "string";

    public $incrementing = false;

    protected $fillable = [ 'tenant_id','user_id','name','slug','language','description','ordering','status'];

    protected function isShow(){

        return false;
    }

    public function getEmit()
    {
        return "translationBus";
    }


    public function getFilter()
    {

        return TranslationFilters::class;
    }
}
