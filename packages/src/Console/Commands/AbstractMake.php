<?php

/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com
 * https://www.sigasmart.com.br
 */

namespace SIGA\Console\Commands;


use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Str;

abstract class AbstractMake extends Command
{


    /**
     * The filesystem instance.
     *
     * @var \Illuminate\Filesystem\Filesystem
     */
    protected $files;

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type;

    protected $aSub = [];

    protected $aFind = [];

    protected $args = [];
    /**
     * Create a new controller creator command instance.
     *
     * @param  \Illuminate\Filesystem\Filesystem  $files
     * @return void
     */
    public function __construct(Filesystem $files)
    {
        parent::__construct();

        $this->files = $files;
    }

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    abstract protected function getStub();

    abstract protected function getStubName();

    abstract protected function getDefaultNamespace();

    /**
     * Execute the console command.
     *
     * @return bool|null
     */
    public function handle()
    {

        $path = $this->getPath($this->getStubName());

        if ($this->alreadyExists($path)) {

            $this->error($this->type . ' already exists!');

            return false;
        }

        $this->makeDirectory($path);

        $this->files->put($path, $this->buildClass());

        $this->info($this->type . ' created successfully.');

        return true;
    }

    /**
     * Parse the name and format according to the root namespace.
     *
     * @param  string  $name
     * @return string
     */
    protected function parseName($name)
    {
        if (Str::contains($name, '/')) {
            $implodeName = array_filter(explode("/", $name));
            $name = last($implodeName);
        }
        if (Str::contains($name, '\\')) {
            $implodeName = array_filter(explode("\\", $name));
            $name = last($implodeName);
        }
        return sprintf("%s%s", $name, $this->type);
    }

    /**
     * Parse the name and format according to the root namespace.
     *
     * @param  string  $name
     * @return string
     */
    protected function SubPath($name)
    {

        $subName = '';
        if (Str::contains($name, '/')) {
            $implodeName = array_filter(explode("/", $name));
            $name = reset($implodeName);
            $subName = $name;
        }
        if (Str::contains($name, '\\')) {
            $implodeName = array_filter(explode("\\", $name));
            $name = reset($implodeName);
            $subName = $name;
        }
        return $subName;
    }



    protected function getNamespace()
    {
        return sprintf("%s%s%s", $this->option('app'), $this->getDefaultNamespace(), $this->SubPath($this->getStubName()));
    }

    /**
     * Build the class with the given name.
     *
     * @param  string  $name
     * @return string
     */
    protected function buildClass()
    {
        $stub = $this->files->get($this->getStub());

        return $this->replaceNamespace($stub);
    }

    /**
     * Replace the class name for the given stub.
     *
     * @param  string  $stub
     * @param  string  $name
     * @return string
     */
    protected function replaceClass($stub, $name)
    {
        $class = str_replace($this->getNamespace($name) . '\\', '', $name);

        if ($this->camalCase) {
            $class = strtolower($class);
        }
        return str_replace('DummyClass', $class, $stub);
    }
    /**
     * Replace the namespace for the given stub.
     *
     * @param  string $stub
     * @return $this
     */
    protected function replaceNamespace(&$stub)
    {

        $this->aSub = array_keys($this->args);
        $this->aFind = array_values($this->args);

        $stub = str_replace($this->aSub, $this->aFind, $stub);

        return $stub;
    }


    /**
     * Get the destination class path.
     *
     * @param  string  $name
     * @return string
     */
    protected function getPath($name)
    {


        if ($this->hasOption('root') && $this->option('root')) {
            $root =  $this->option('root');
        } else {
            $root = strtolower($this->option('app'));
        }


        if ($this->hasOption('camel') && $this->option('camel')) {
            $name = strtolower($name);
        }

        $name = sprintf(
            '%s/%s/%s%s.php',
            base_path($root),
            str_replace(['\\', '//'], [DIRECTORY_SEPARATOR, DIRECTORY_SEPARATOR], $this->getDefaultNamespace()),
            $name,
            $this->type
        );

        return str_replace(['\\', '//', '\/', '/'], DIRECTORY_SEPARATOR, $name);
    }

    protected function makeDirectory($path)
    {
        if (!$this->files->isDirectory(dirname($path))) {
            $this->files->makeDirectory(dirname($path), 0777, true, true);
        }
    }

    /**
     * Determine if the class already exists.
     *
     * @param  string  $rawName
     * @return bool
     */
    protected function alreadyExists($rawName)
    {
        return $this->files->exists($rawName);
    }

    /**
     * Get the console command arguments.
     *
     * @return array
     */
    protected function getArguments()
    {
        return $this->_arguments;
    }
}
