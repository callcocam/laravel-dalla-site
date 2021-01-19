<?php

/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace SIGA;


trait Delete
{
    public function deleteBy($model)
    {
        /**
         * @var TraitTable $model
         */
        if ($model) {

            //$this->preAction($model);
            if ($model->delete()) {
               // $this->posAction($model);
                return $this->setMessages(true, 'destroy',"Registro foi excluido com sucesso!!");
            }
        }
        return $this->setMessages(false, 'destroy',"Registro não foi excluido, ouve um erro!!");
    }


    public function deleteAll($data)
    {
        /**
         * @var TraitTable $model
         */
        $model = $this->query()->whereIn('id', $data);

        if ($model) {
            $this->results = [
                'model' => $model->delete()
            ];
            return $this->setMessages(true, 'destroy');
        }

        return $this->setMessages(false, 'destroy');
    }
}
