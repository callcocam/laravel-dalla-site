<?php

/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace SIGA\Http\Controllers\Api;

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Route;
use SIGA\Database\Schema\SchemaManager;
use SIGA\Database\Schema\Table;
use SIGA\Database\Types\Type;
use SIGA\Events\MakeEvent;
use SIGA\Make;
use SIGA\Http\Requests\MakeRequest;
use SIGA\Http\Resources\Make\MakeCollection;
use SIGA\Http\Resources\Make\MakeResource;
use SIGA\Http\AbstractController;

class MakeController extends AbstractController
{


    //protected $event = MakeEvent::class;

    protected $model = Make::class;

    protected $withs = [];

    protected $collection = MakeCollection::class;
    protected $resources = MakeResource::class;

    /**
     * Store a newly created resource in storage.
     *
     * @param  MakeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MakeRequest $request)
    {

        return parent::save($request);
    }


    public function search_route()
    {
        $data = [];
        if ($this->tableDontExist("makes")) {
            // $autoMenuGenerate = new AutoMenuGenerate;
            $makes = Make::query()->where('status', 'published')->get();
            if ($makes) {
                foreach ($makes as $item) {
                    if ($item->app_route) {
                        if(Route::has(sprintf("admin.%s.index",$item->app_route))){
                            if(!Gate::denies(sprintf("admin.%s.index",$item->app_route))){
                                $data[] = [
                                    "title"=>$item->name,
                                    "url"=>['name'=>sprintf("admin.%s.index",$item->app_route)],
                                    "is_bookmarked"=>false,
                                    "icon"=>"HomeIcon"
                                ];
                            }
                        }

                    }
                }
            }
        }
        return response()->json([
            "pages"=>[
                "key"=>"title",
                "data" => $data
            ]
        ]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  MakeRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MakeRequest $request, $id)
    {
        return parent::save($request, $id);
    }

    public function generateTable(MakeRequest $request)
    {

        $table = $request->app_table;
        if (!is_array($request->app_table)) {
            $table = json_decode($request->app_table, true);
        }
        $conn = 'database.connections.' . config('database.default');
        Type::registerCustomPlatformTypes();
        $table['table'] = $request->input('table');
        $table['options']['collate'] = config($conn . '.collation', 'utf8mb4_unicode_ci');
        $table['options']['charset'] = config($conn . '.charset', 'utf8mb4');
        $table = Table::make($table);
        SchemaManager::createTable($table);

        return response()->json([
            'message' => sprintf("Tabela %s, criada com sucesso!!", $request->input('table'))
        ]);
    }


    public function generateModel(MakeRequest $request)
    {

        Artisan::call("make:sg-model", [
            'name' => $request->input('app_model'),
            'table' => $request->input('app_table'),
            '--app' => $request->input('app_path'),
            '--theme' => $request->input('app_theme'),
            '--root' => $request->input('app_root')
        ]);
        $output = Artisan::output();
        return response()->json([
            'message' => $output
        ]);
    }


    public function generateSeeder(MakeRequest $request)
    {

        Artisan::call("make:sg-seeder", [
            'name' => $request->input('name'),
            'path' => $request->input('path'),
            'model' => $request->input('app_model'),
            'controller' => $request->input('app_controller'),
            'route' => $request->input('app_route'),
            'table' => $request->input('app_table'),
            '--app' => $request->input('app_path'),
            '--root' => $request->input('app_root')
        ]);
        $output = Artisan::output();
        return response()->json([
            'message' => $output
        ]);
    }


    public function generateSiteController(MakeRequest $request)
    {
        Artisan::call("make:sg-site-controller", [
            'name' => $request->input('app_controller'),
            '--theme' => $request->input('app_theme'),
            '--app' => $request->input('app_path'),
            '--root' => $request->input('app_root')
        ]);

        Artisan::call("make:sg-site-view", [
            'name' => strtolower($request->input('app_model')),
            '--theme' => strtolower($request->input('app_theme'))
        ]);

        $output = Artisan::output();
        return response()->json([
            'message' => $output
        ]);
    }

    public function generateController(MakeRequest $request)
    {
        Artisan::call("make:sg-controller", [
            'name' => $request->input('app_controller'),
            '--theme' => $request->input('app_theme'),
            '--app' => $request->input('app_path'),
            '--root' => $request->input('app_root')
        ]);
        $output = Artisan::output();
        return response()->json([
            'message' => $output
        ]);
    }




    public function generateFilters(MakeRequest $request)
    {
        Artisan::call("make:sg-filters", [
            'name' => $request->input('app_model'),
            '--app' => $request->input('app_path'),
            '--theme' => $request->input('app_theme'),
            '--root' => $request->input('app_root')
        ]);
        $output = Artisan::output();
        return response()->json([
            'message' => $output
        ]);
    }

    public function generateFilter(MakeRequest $request)
    {
        Artisan::call("make:sg-filter", [
            'name' => $request->input('app_model'),
            '--app' => $request->input('app_path'),
            '--theme' => $request->input('app_theme'),
            '--root' => $request->input('app_root')
        ]);
        $output = Artisan::output();
        return response()->json([
            'message' => $output
        ]);
    }


    public function generateResource(MakeRequest $request)
    {
        Artisan::call("make:sg-resource", [
            'name' => $request->input('app_model'),
            '--app' => $request->input('app_path'),
            '--theme' => $request->input('app_theme'),
            '--root' => $request->input('app_root')
        ]);
        $output = Artisan::output();
        return response()->json([
            'message' => $output
        ]);
    }


    public function generateColection(MakeRequest $request)
    {
        Artisan::call("make:sg-collection", [
            'name' => $request->input('app_model'),
            '--app' => $request->input('app_path'),
            '--theme' => $request->input('app_theme'),
            '--root' => $request->input('app_root')
        ]);
        $output = Artisan::output();
        return response()->json([
            'message' => $output
        ]);
    }


    public function generateRequest(MakeRequest $request)
    {
        Artisan::call("make:sg-request", [
            'name' => $request->input('app_model'),
            '--app' => $request->input('app_path'),
            '--theme' => $request->input('app_theme'),
            '--root' => $request->input('app_root')
        ]);
        $output = Artisan::output();
        return response()->json([
            'message' => $output
        ]);
    }
}
