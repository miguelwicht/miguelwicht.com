<?php

class ProjectsController extends BaseController {

    /**
     * Create a new controller instance
     *
     * Inject the repository interfaces.
     *
     * @param ProjectRepositoryInterface $projects
     */
    public function __construct(ProjectRepositoryInterface $projects)
    {
        $this->projects = $projects;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        Wardrobe::setupViews();
        $projects = Project::orderBy('years', 'desc')->get();

        return View::make('projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return View::make('projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $project = $this->projects->store(Input::all());

        if(is_array($project)) {
            $errors = $project['message'];
            return Redirect::action('ProjectsController@create')
                            ->withErrors($errors)
                            ->withInput(Input::all());
        } else {
            return Redirect::action('ProjectsController@index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $project = $this->projects->findById($id);

        return View::make('projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $project = $this->projects->findById($id);

        return View::make('projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        $project = $this->projects->updateById($id,Input::all());

        if(is_array($project)) {
            $errors = $project['message'];
            return Redirect::action('ProjectsController@edit', $id)
                            ->withErrors($errors)
                            ->withInput(Input::all());
        } else {
            return Redirect::action('ProjectsController@index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $project = $this->projects->destroy($id);
    }

}