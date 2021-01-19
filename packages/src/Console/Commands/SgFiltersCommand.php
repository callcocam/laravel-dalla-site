<?php

/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace SIGA\Console\Commands;

use SIGA\Console\Commands\AbstractMake;

class SgFiltersCommand extends AbstractMake
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:sg-filters {name} {field?}
                            {--app=App : Detault App}
                            {--camel= : transformar em caixa baixa}
                            {--theme= : Pasta do theme}
                            {--root= : Pasta raiz}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'gera um filtro para os filtro do model';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = "Filters";


    public function handle()
    {
        $this->args['{{ namespace }}'] = $this->getNamespace();
        $this->args['{{ class }}'] = $this->parseName($this->getStubName());
        $this->args['{{ theme }}'] = '';
        if ($this->hasOption('theme') && $this->option('theme'))
            $this->args['{{ theme }}'] = sprintf("\%s", $this->option('theme'));
        $this->args['{{ field }}'] = $this->argument('field');
        parent::handle();
    }

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        return __DIR__ . '/stubs/filters.stub';
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
            return sprintf('\\Http\\Filters\\%s\\%s', $this->option('theme'), $this->argument('name'));

        return sprintf('\\Http\\Filters\\%s', $this->argument('name'));
    }
}
