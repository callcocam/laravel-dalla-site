<?php
/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */
namespace SIGA;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use TableTrait;

    public $incrementing = false;

    protected $keyType = "string";

    protected $table="galleries";

    protected $fillable =[ 'tenant_id','name','slug','width','height','ordering','status', 'updated_at','created_at'];

    public function gallerieable(){

        return $this->morphTo();
    }
}
