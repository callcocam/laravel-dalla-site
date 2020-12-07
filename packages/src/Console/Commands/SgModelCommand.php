<?php

/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace SIGA\Console\Commands;

use SIGA\Console\Commands\AbstractMake;
use Str;

class SgModelCommand extends AbstractMake
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:sg-model {name} {table}
                            {--app=App : Detault App}
                            {--camel= : transformar em caixa baixa}
                            {--theme= : Pasta do theme}
                            {--root= : Pasta raiz}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'gera uma model padrão siga';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = "";


    public function handle()
    {

        $this->args['{{ namespace }}'] = $this->getNamespace();
        $this->args['{{ class }}'] = $this->parseName($this->getStubName());
        $this->args['{{ app }}'] = $this->option('app');
        $this->args['{{ theme }}'] = '';
        if ($this->hasOption('theme') && $this->option('theme'))
            $this->args['{{ theme }}'] = sprintf("\%s", $this->option('theme'));
        $this->args['{{ model }}'] = $this->argument('name');
        $this->args['{{ fillable }}'] = $this->fillable();
        parent::handle();
    }

    protected function fillable()
    {

        $table = Str::plural(strtolower($this->argument('table')));
        $columns = \Illuminate\Support\Facades\DB::select("DESC {$table}");
        $rows = collect($columns)->map(function ($column) {

            return $column->Field;
        });
        $fields = [];
        $ignore = ['id', 'deleted_at', 'created_at', 'updated_at'];
        if ($rows) {
            foreach ($rows as $row) {
                if (!in_array($row, $ignore)) {
                    $fields[] = $row;
                }
            }
        }

        return sprintf("'%s'", implode("','", $fields));
    }
    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        return __DIR__ . '/stubs/model.stub';
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
            return sprintf('\\%s', $this->option('theme'));
        return '';
    }
}
