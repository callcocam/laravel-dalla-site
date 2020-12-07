<?php

/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace SIGA;


trait Create
{
    protected $errorsKeysCreate = [];

    /**
     * @param $input
     * @return mixed
     */
    public function createBy($input)
    {
        return $this->finallyCreated($input);
    }

    /**
     * @param $input
     * @return mixed
     */
    protected function finallyCreated($input)
    {
        array_push($this->fillable, 'tenant_id', 'created_at', 'updated_at');

        unset($input['id'], $input['originalData'], $input['busy']);

        $data = [];

        foreach ($this->fillable as $value) :

            try {
                $data[$value] = $input[$value];
            } catch (\Exception $e) {
            }

        endforeach;

        try {
            $this->model = self::query()->create($data);
        } catch (\Illuminate\Database\QueryException $e) {

            $this->messages[] = $e->getMessage();

            if ($this->errorsKeysCreate) {

                foreach ($this->errorsKeysCreate as $key => $value) {

                    if (\Str::contains($e->getMessage(), $key)) {

                        $this->messages[]  = $value;
                    }
                }
            }
            return $this->setMessages(false, 'create',"Registro não foi cadastrado, ouve um erro!!");
        }

        if (!$this->model) :

            return $this->setMessages(false, 'create',"Registro não foi cadastrado, ouve um erro!!");

        endif;

        $this->lastId = $this->model->id;

        $this->posAction($input);

        $input = array_merge($input, $this->model->toArray());

        $this->results['data'] = $input;

        $this->results['redirect'] = [
            'name' => sprintf(config('siga.table.admin.edit.route', 'admin.%s.edit'), $this->getEndpoint()),
            'params' => [
                'id' => $this->lastId
            ]
        ];
        return $this->setMessages(true, 'create',"Registro foi cadastrado com sucesso!!");
    }
}
