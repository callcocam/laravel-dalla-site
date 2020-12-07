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

class Event extends Model
{
    use TableTrait;

    protected $keyType = "string";

    public $incrementing = false;

    protected $fillable = [ 'tenant_id','user_id','name','card_image','slug','subtitle','language','description','status'];

    public function event_edtions(){

        return $this->hasMany(EventEdtion::class);
    }
 /**
     * @return \Illuminate\Config\Repository|mixed|string
     */
    public function getCardImageAttribute($value)
    {
        return UploadProcessor::get($value);
    }

    public function isShow()
    {
        return false;
    }
}
