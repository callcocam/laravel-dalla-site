<?php
/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */
namespace SIGA;

use Illuminate\Database\Eloquent\Model;
use SIGA\Sluggable\SlugOptions;

class File extends Model
{
    use TableTrait;

    public $incrementing = false;

    protected $keyType = "string";

    protected $table="files";

    protected $fillable =[ 'tenant_id','name','slug','status', 'updated_at','created_at'];


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
