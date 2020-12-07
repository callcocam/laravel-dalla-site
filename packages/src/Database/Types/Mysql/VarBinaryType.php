<?php

/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace SIGA\Database\Types\Mysql;

use Doctrine\DBAL\Platforms\AbstractPlatform;
use SIGA\Database\Types\Type;

class VarBinaryType extends Type
{
    const NAME = 'varbinary';

    public function getSQLDeclaration(array $field, AbstractPlatform $platform)
    {
        $field['length'] = empty($field['length']) ? 255 : $field['length'];

        return "varbinary({$field['length']})";
    }
}
