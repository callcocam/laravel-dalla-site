<?php

/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AbstractController extends Controller
{

    public static $PUBLISHED_STATUS = "published";
    public static $DRAFT_STATUS = "draft";
    protected $results = [];
    protected $model;
    protected $event;
    protected $request;
    protected $perPage = 12;
    protected $colunm = 'created_at';
    protected $direction = 'desc';
    protected $template = 'home';
    protected $theme = '';

    /**
     * Display a listing of the resource.
     *
     * @param  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($this->model) {
            $this->results['rows'] = app($this->model)
                ->filter($request)
                ->lang()
                ->orderBy($this->colunm, $this->direction)
                ->paginate(request()->query('page', $this->perPage));
        }
        if (empty($this->theme))
            return view(sprintf("%s.index", $this->template), $this->results);

        return view(sprintf("%s.%s.index", $this->theme, $this->template), $this->results);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        if ($this->model) {
            $this->results['rows'] = app($this->model)->findBySlug($id);
        }

        if (empty($this->theme))
            return view(sprintf("%s.show", $this->template), $this->results);

        return view(sprintf("%s.%s.show", $this->theme, $this->template), $this->results);
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
            return redirect()->back()->withInput()->with('error', "Nenhuma model foi passada");
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

        return redirect()->back()->with('success', $model->getMessage());
    }
}
