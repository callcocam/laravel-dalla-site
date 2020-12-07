<?php
/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */
namespace SIGA;

use Illuminate\Database\Eloquent\Model;
use SIGA\Sluggable\SlugOptions;

class Addres extends Model
{

    use TableTrait;

    public $incrementing = false;

    protected $keyType = "string";

    protected $table="address";

    protected $fillable =[ 'tenant_id','user_id','slug','zip','city','state','country', 'street','district','number','complement','status', 'updated_at','created_at'];

    public function addresable(){

        return $this->morphTo();
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
