<?php

/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace SIGA\Http;


use App\Http\Controllers\Controller;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Route;


class AbstractController extends Controller
{

    protected $perPage = 12;

    protected $model;

    protected $event;

    protected $resources;

    protected $collection;

    protected $results = [];

    protected $withs = ['user'];

    private $loadWiths = [];



    public function __construct()
    {

        $this->addWiths($this->withs);
    }

    /**
     * Display a listing of the resource.
     *
     * @param  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if (Gate::denies(Route::currentRouteName())) {

            return response()->json("Not Authorized", '401');
        }


        $model = null;

        if ($this->model) {

            $model = $this->getModel()
                ->with($this->loadWiths)
                ->latest()
                ->filter($request)
                ->paginate(request()->query('per_page', $this->perPage));
        }

        if (!$this->collection) {

            return response()->json($model, 200);
        }

        return new $this->collection($model);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        if (Gate::denies(Route::currentRouteName())) {

            return response()->json("Not Authorized", '401');
        }
        if (!$this->model) {
            return response()->json([
                'message' => "Nenhuma model foi passada"
            ]);
        }
        $model = app($this->model);
        return new $this->resources($model);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  $request
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function save($request, $id = null)
    {

        if (!$this->model) {
            return response()->json([
                'message' => "Nenhuma model foi passada"
            ]);
        }
        $model = app($this->model);

        if ($id) {
            $model->updateBy($request->input(), $id);
        } else {
            $model->createBy($request->input());
        }

        $uuid = $model->getResultLastId();

        if ($uuid) {

            if ($this->event) {

                $this->setEvent($model->findById($uuid));
            }
        }

        return $model->getResults();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (Gate::denies(Route::currentRouteName())) {

            return response()->json("Not Authorized", '401');
        }
        if (!$this->model) {
            return response()->json([
                'message' => "Nenhuma model foi passada"
            ]);
        }

        $model = $this->getModel()->find($id);
        $this->results = new $this->resources($model);
        return $this->results;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (Gate::denies(Route::currentRouteName())) {

            return response()->json("Not Authorized", '401');
        }
        if (!$this->model) {
            return response()->json([
                'message' => "Nenhuma model foi passada"
            ]);
        }
        $model = $this->getModel()->find($id);
        $this->results = new $this->resources($model);
        return $this->results;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (Gate::denies(Route::currentRouteName())) {

            return response()->json("Not Authorized", '401');
        }
        if (!$this->model) {
            return response()->json([
                'message' => "Nenhuma model foi passada"
            ]);
        }
        $model = $this->getModel()->find($id);

        if (!$model) {
            return $model->getResults();
        }
        $model->deleteBy($model);

        return $model->getResults();
    }

    /**
     * remove all items.
     *
     * @param  $request
     * @return \Illuminate\Http\Response
     */
    public function destroyAll(Request $request)
    {
        if (Gate::denies(Route::currentRouteName())) {

            return response()->json("Not Authorized", '401');
        }
        if (!$this->model) {
            return response()->json([
                'message' => "Nenhuma model foi passada"
            ]);
        }

        $selected = $request->input('selected');

        $model = app($this->model);

        if (!$selected) {
            return $model->getResults();
        }
        $model->deleteAll($selected);

        return $model->getResults();
    }

    /**
     * Update the avatar for the user.
     *
     * @param  Request  $request
     * @return Response
     */
    public function upload(Request $request)
    {

        $path = $request->file('file')->store(str_replace(".", '/', Route::currentRouteName()));
        if ($this->model) {
            $model = $this->getModel()->find($request->input('id'));
            if ($model) {
                $model->file()->create([
                    'name' => $path
                ]);
            }
        }

        return response()->json([
            'path' => sprintf("/storage/%s", $path),
            'url' => url($path)
        ]);
    }

    /**
     * Update the avatar for the user.
     *
     * @param  Request  $request
     * @return Response
     */
    public function multiple_upload_load($id)
    {

        $data = [];
        if ($this->model) {
            $model = $this->getModel()->find($id);
            if ($model) {
                $data = $model->append('gallery');
                return response()->json($data->gallery);
            }
        }
        return response()->json($data);
    }

    /**
     * Update the avatar for the user.
     *
     * @param  Request  $request
     * @return Response
     */
    public function multiple_upload(Request $request)
    {

        $data = [];
        $path = $request->file('gallery')->store(str_replace(".", '/', Route::currentRouteName()));
        if ($this->model) {
            $model = $this->getModel()->find($request->input('id'));
            if ($model) {
                $model->gallery()->create([
                    'name' => $path,
                    'created_at' => date("Y-m-d H:i:s"),
                ]);
                $data = $model->append('gallery');
                return response()->json($data->gallery);
            }
        }
        return response()->json($data);
    }

    /**
     * Update the avatar for the user.
     *
     * @param  Request  $request
     * @return Response
     */
    public function remove_file(Request $request)
    {


        if (\Storage::exists(Str::replaceFirst("/storage", "", $request->get('file')))) {
            \Storage::delete($request->get('file'));
        }

        if ($this->model) {
            $model = $this->getModel()->find($request->input('id'));
            if ($model) {
                $model->gallery()->where('id', $request->input('file_id'))->delete();
                $data = $model->append('gallery');
                return response()->json($data->gallery);
            }
        }


        return response()->json([
            'path' => config('siga.image.no_image'),

        ]);
    }

    public function getModel()
    {

        if (is_string($this->model))
            $this->model = app($this->model);

        return $this->model;
    }
    protected function addWiths(array $withs)
    {

        if ($withs) {

            foreach ($withs as $with) {
                $this->addWith($with);
            }
        }
    }


    protected function addWith($with)
    {

        $this->loadWiths[] = $with;
    }

    /**
     * @return mixed
     */
    /**
     * @param $handler
     * @return void
     */
    protected function setEvent($handler)
    {

        event(new $this->event($handler));
    }


    protected function tableDontExist($table)
    {
        return \Illuminate\Support\Facades\Schema::hasTable($table);
    }
}
