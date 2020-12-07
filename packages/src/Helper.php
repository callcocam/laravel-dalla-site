<?php

/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace SIGA;


trait Helper
{

    protected $lastId;

    protected $queryParams = [];

    protected $messages = [];

    protected $results = [
        'result' => false,
        'type' => 'danger',
        'color' => 'danger',
        'text' => "Falhou, não foi possivel realizar a operação!!",
        'messages' => "Falhou, não foi possivel realizar a operação!!",
        'title' => 'Operação:',
        'position' => 'bottom-center', //top-right  top-left top-center bottom-right bottom-left
        'iconPack' => 'feather',
        'icon' => 'icon-mail'
    ];

    /**
     * @param $key
     * @param null $default
     * @return |null
     */
    protected function params($key, $default = null)
    {

        if (isset($this->queryParams[$key]))
            return $this->queryParams[$key];

        return $default;
    }

    /**
     * @return array
     */
    protected function paramsAll()
    {

        return $this->queryParams;
    }


    protected function setMessages($result, $operation = "index", $default="Realizado com sucesso!!")
    {

        $messageAppend = [];

        if ($this->messages) {

            if (!isset($this->messages))
                $this->messages[] = $this->messages;

            foreach ($this->messages as $message) {

                $messageAppend[] = $message;
            }

            $this->results['logs'] =  $messageAppend;
        }
        $this->results['title'] = config("siga.admin.table.{$operation}.messages.title", 'Operação:');

        if ($result) {
            $this->results['emit'] = $this->getEmit();
            $this->results['result'] = $result;
            $this->results['type'] = config("siga.admin.table.{$operation}.messages.type.success", 'success');
            $this->results['color'] = config("siga.admin.table.{$operation}.messages.type.success", 'success');
            $this->results['icon'] = config("siga.admin.table.{$operation}.messages.icon", 'icon-check');
            $this->results['iconPack'] = config("siga.admin.table.{$operation}.messages.icon.type", 'feather');
            $this->results['messages'] =  config("siga.admin.table.{$operation}.messages.message.success", $default);
            $this->results['text'] =  config("siga.admin.table.{$operation}.messages.message.success", $default);
            return $result;
        }

        $this->results['result'] = $result;
        $this->results['color'] = config("siga.admin.table.{$operation}.messages.type.error", 'danger:');
        $this->results['type'] = config("siga.admin.table.{$operation}.messages.type.error", 'danger:');
        $this->results['icon'] = config("siga.admin.table.{$operation}.messages.icon", 'icon-alert-circle');
        $this->results['iconPack'] = config("siga.admin.table.{$operation}.messages.icon.type", 'feather');
        $this->results['messages'] =  sprintf(config("siga.admin.table.{$operation}.messages.message.error", "Falhou, não foi possivel encontrar o registro - %s!!"), $this->getKey());
        $this->results['text'] =  sprintf(config("siga.admin.table.{$operation}.messages.message.error", "Falhou, não foi possivel encontrar o registro - %s!!"), $this->getKey());
        return $result;
    }

    /**
     * @return array
     */
    public function getResults()
    {

        return $this->results;
    }

    /**
     * @param $key
     * @return bool
     */
    public function getResult($key)
    {
        if (isset($this->results[$key])) {
            return $this->results[$key];
        }
        return false;
    }


    /**
     * @param $key
     * @return bool
     */
    public function getMessage()
    {
        return $this->getResult("messages");
    }

    /**
     * @return string
     */
    public function getResultLastId()
    {
        if (is_string($this->lastId)) {
            return $this->lastId;
        }
        if ($this->lastId) {
            return $this->lastId->toString();
        }
        return $this->lastId;
    }

}
