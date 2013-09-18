<?php

/**
 * Repository for the Project model using Eloquent ORM
 */
class EloquentProjectRepository extends EloquentBaseRepository implements ProjectRepositoryInterface
{
    /**
     * Create a new repository instance
     *
     * Inject the repository interfaces.
     *
     * @param BaseValidatorRepositoryInterface $validator
     */
    public function __construct(Project $model, BaseValidatorRepositoryInterface $validator)
    {
        parent::__construct($model, $validator);
    }

    public function findBySlug($slug)
    {
        $project = $this->model->where('slug', '=', $slug)->first();

        return $project;
    }

    /**
     * Update the specified project
     *
     * @param  array $data PUT data from the request.
     *
     * @return object Updated project.
     */
    public function updateById($id, $data)
    {
        $validator = $this->validate($data, $this->model->rules);

        // Check if validator returned an array with the error code and the message
        if (is_array($validator)) return $validator;

        $project = $this->findById($id);

        // ADD DATA HERE

        $project->save();
    }
}