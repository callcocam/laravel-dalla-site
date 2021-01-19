<?php
/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */
namespace SIGA;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{

    use TableTrait;

    public $incrementing = false;

    protected $keyType = "string";

    protected $table="notifications";

    protected $fillable =[ 'tenant_id','user_id','slug','name','inscriptions','description','status', 'updated_at','created_at'];


}
