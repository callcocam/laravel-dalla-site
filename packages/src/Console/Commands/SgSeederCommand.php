<?php

/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace SIGA\Console\Commands;

use SIGA\Console\Commands\AbstractMake;
use Str;

class SgSeederCommand extends AbstractMake
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:sg-seeder {name} {path} {model} {controller} {route} {table}
                            {--app=App : Detault App}
                            {--root= : Pasta raiz}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'gera uma seeder padrão siga';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = "Seeder";


    public function handle()
    {

        $this->args['{{ class }}'] = $this->parseName($this->getStubName());
        $this->args['{{ app }}'] = $this->option('app');
        $this->args['{{ name }}'] = $this->argument('name');
        $this->args['{{ path }}'] = $this->argument('path');
        $this->args['{{ model }}'] = $this->argument('model');
        $this->args['{{ controller }}'] = $this->argument('controller');
        $this->args['{{ route }}'] = $this->argument('route');
        $this->args['{{ table }}'] = $this->argument('table');
        parent::handle();
    }
    /**
     * Get the destination class path.
     *
     * @param  string  $name
     * @return string
     */
    protected function getPath($name)
    {

        $name = database_path(sprintf(
            "seeds/%s%s.php",
            $name,
            $this->type
        ));

        return str_replace(['\\', '//', '\/', '/'], DIRECTORY_SEPARATOR, $name);
    }
    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        return __DIR__ . '/stubs/seeder.stub';
    }

    /**
     * Get the stub name.
     *
     * @return string
     */
    protected function getStubName()
    {
        return $this->argument('model');
    }

    protected function getDefaultNamespace()
    {
        return '';
    }
}
