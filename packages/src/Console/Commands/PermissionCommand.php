<?php

namespace SIGA\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Route;
use SIGA\Acl\Permission;
use SIGA\Make;
use Str;

class PermissionCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:permission';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Cadastra novas permisões';

    protected $permission;

    protected $make;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(Permission $permission, Make $make)
    {
        parent::__construct();

        $this->make = $make;
        $this->permission = $permission;
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $makes = $this->make->get();

        $actions = ['index', 'create', 'edit', 'show', 'update', 'store', 'destroy'];

        if ($makes) {

            foreach ($makes as $make) {

                foreach ($actions as $action) {

                    if (!$this->permission->where('slug', sprintf("admin.%s.%s", $make->app_route, $action))->first()) {

                        if (Route::has(sprintf("admin.%s.%s", $make->app_route, $action))) {

                            $this->permission->createBy([
                                'name' =>  $make->name,
                                'slug' => sprintf("admin.%s.%s", $make->app_route, $action),
                                'groups' => $action,
                                'description' => sprintf("%s %s", $make->name, Str::title($action))
                            ]);
                            if ($this->permission->getResult('result'))
                                $this->info(sprintf("%s %s created successfully.", $make->name, Str::title($action)));
                            else
                                $this->error(sprintf("%s %s not created.", $make->name, Str::title($action)));
                        }
                    }
                }
            }
        }
    }
}
