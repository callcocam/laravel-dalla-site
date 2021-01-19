<?php

/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace SIGA\Console\Commands;

use SIGA\Console\Commands\AbstractMake;

class SgRequestCommand extends AbstractMake
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:sg-request {name}
                            {--app=App : Detault App}
                            {--camel= : transformar em caixa baixa}
                            {--theme= : Pasta do theme}
                            {--root= : Pasta raiz}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'gera um controller padrão siga';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = "Request";


    public function handle()
    {
        $this->args['{{ namespace }}'] = $this->getNamespace();
        $this->args['{{ class }}'] = $this->parseName($this->getStubName());
        $this->args['{{ theme }}'] = '';
        if ($this->hasOption('theme') && $this->option('theme'))
            $this->args['{{ theme }}'] = sprintf("\%s", $this->option('theme'));
        $this->args['{{ app }}'] = $this->option('app');
        $this->args['{{ model }}'] = $this->argument('name');
        parent::handle();
    }

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        return __DIR__ . '/stubs/request.stub';
    }

    /**
     * Get the stub name.
     *
     * @return string
     */
    protected function getStubName()
    {
        return $this->argument('name');
    }

    protected function getDefaultNamespace()
    {
        if ($this->hasOption('theme') && $this->option('theme'))
            return sprintf('\\Http\\Requests\\%s', $this->option('theme'));

        return '\\Http\\Requests';
    }
}
