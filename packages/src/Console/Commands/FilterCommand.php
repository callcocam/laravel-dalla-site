<?php
/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */
namespace SIGA\Console\Commands;

use SIGA\Console\Commands\AbstractMake;
use Symfony\Component\Console\Input\InputArgument;

class FilterCommand extends AbstractMake
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:filter {name} {field?}
                            {--app=App : Detault App}
                            {--camel= : transformar em caixa baixa}
                            {--root= : Pasta raiz}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'gera um filtro para consultas no banco';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type ="Filter";


    public function handle()
    {
        $this->args['{{ namespace }}'] = $this->getNamespace();
        $this->args['{{ class }}'] = $this->parseName($this->getStubName());
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
        return __DIR__.'/stubs/filter.stub';
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
      return '\\Http\\Filters\\';
    }

}
