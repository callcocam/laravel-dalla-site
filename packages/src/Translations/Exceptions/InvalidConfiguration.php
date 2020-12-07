<?php
/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace SIGA\Translations\Exceptions;

use Exception;
use SIGA\Translations\LanguageLine;

class InvalidConfiguration extends Exception
{
    public static function invalidModel(string $className): self
    {
        return new static("You have configured an invalid class `{$className}`." .
            'A valid class extends ' . LanguageLine::class . '.');
    }
}
