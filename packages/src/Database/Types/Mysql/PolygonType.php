<?php

/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace SIGA\Database\Types\Mysql;

use Doctrine\DBAL\Platforms\AbstractPlatform;
use SIGA\Database\Types\Type;

class PolygonType extends Type
{
    const NAME = 'polygon';

    public function getSQLDeclaration(array $field, AbstractPlatform $platform)
    {
        return 'polygon';
    }
}
