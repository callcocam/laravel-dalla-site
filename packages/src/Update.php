<?php

/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace SIGA;


trait Update
{


    public function updateBy($input, $id)
    {
        return $this->finallyUpdateBy($input, $id);
    }


    protected function finallyUpdateBy($input, $id)
    {
        array_push($this->fillable, 'updated_at');
        /**
         * @var $model TraitTable
         */
        $this->model = $this->find($id);

        if (!$this->model) :
            return $this->setMessages(false, 'update',"Registro não foi atualizado, ouve um erro!!");
        endif;
        unset($input['created_at'], $input['originalData'], $input['busy']);
        $this->model->fill($input);
        if (!$this->model->save()) :
            return $this->setMessages(false, 'update',"Registro não foi atualizado, ouve um erro!!");
        endif;
        $this->posAction($input);
        $input = array_merge($input, $this->model->toArray());
        $this->lastId =  $id;
        $this->results['data'] =  $input;
        $this->results['id'] =  $id;
        return $this->setMessages(true, 'update',"Registro foi atualizado com sucesso!!");
    }
}
