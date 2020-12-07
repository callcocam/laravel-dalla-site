<?php

/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace SIGA\Console\Commands;

use SIGA\Console\Commands\AbstractMake;

class SgSiteViewCommand extends AbstractMake
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:sg-site-view {name}
                                            {--theme= : Pasta do theme}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'gera um site controller padrão siga';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = "";

    protected $view = "index";

    public function handle()
    {
        $this->args['{{ layouts }}'] = 'layouts.app';
        if ($this->hasOption('theme') && $this->option('theme')) {
            $this->args['{{ layouts }}'] = sprintf("layouts.%s", $this->option('theme'));
        }
        $this->args['{{ name }}'] = strtolower($this->argument('name'));

        parent::handle();

        $this->view = "show";

        parent::handle();
    }

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        return sprintf('%s/stubs/view-%s.stub', __DIR__, $this->view);
    }

    /**
     * Get the destination class path.
     *
     * @param  string  $name
     * @return string
     */
    protected function getPath($name)
    {

        if ($this->hasOption('theme') && $this->option('theme')) {
            $name = resource_path(sprintf("views/%s/%s/%s.blade.php", strtolower($this->option('theme')), $name, $this->view));
        } else {
            $name = resource_path(sprintf("views/%s/%s.blade.php", $name, $this->view));
        }
        return str_replace(['\\', '//', '\/', '/'], DIRECTORY_SEPARATOR, $name);
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

        return '';
    }
}
