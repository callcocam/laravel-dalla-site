<?php
/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace  App\Dalla;

use SIGA\TableTrait;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use TableTrait;

    protected $keyType = "string";

    public $incrementing = false;

    protected $fillable = [ 'tenant_id','user_id','name','slug','subtitle','description','language','status'];

    public function isShow()
    {
        return false;
    }
}
