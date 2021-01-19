<?php
/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace  App\Dalla;

use SIGA\TableTrait;
use Illuminate\Database\Eloquent\Model;

class EventEdtion extends Model
{
    use TableTrait;

    protected $keyType = "string";

    public $incrementing = false;

    protected $fillable = [ 'tenant_id','user_id','event_id','name','slug','description','language','ordering'];

    public function getEndpoint()
    {

        return "event-edtions";
    }
    public function isShow()
    {
        return false;
    }
}
