<?php
/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com
 * https://www.sigasmart.com.br
 */
namespace SIGA\Acl\Contracts;


interface Permission
{
    /**
     * Permissions can belong to many roles.
     *
     * @return mixed
     */
    public function roles();
}
