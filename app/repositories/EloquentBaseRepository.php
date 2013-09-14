<?php

/**
 * Repository for a model using Eloquent ORM
 */
class EloquentBaseRepository extends Eloquent
{
    protected $model = null;
    /**
     * Create a new repository instance
     *
     * Inject the repository interfaces.
     *
     * @param BaseValidatorRepositoryInterface $validator
     */
    public function __construct($model, BaseValidatorRepositoryInterface $validator)
    {
        parent::__construct();
        $this->validator = $validator;
        $this->setModel($model);
    }

    /**
     * Create a new object
     *
     * @param  array  $data model data
     *
     * @return object Model object
     */
    public function instance($data = array())
    {
        return new $this->model($data);
    }

    public function setModel($model)
    {
        $this->model = $model;
    }

    /**
     * All objects
     *
     * @return object All objects.
     */
    public function findAll()
    {
        $results = $this->model->all();

        return $results;
    }

    /**
     * Specified object by id
     *
     * @param  int $id ID of the object
     *
     * @return object Specified object.
     */
    public function findById($id)
    {
        $result = $this->model->find($id);

        return $result;
    }

    /**
     * Store a new object
     *
     * @param  array $data POST data from the request.
     */
    public function store($data)
    {
        $validator = $this->validator->validate($data, $this->model->rules);

        // Check if validator returned an array with the error code and the message
        if (is_array($validator)) return $validator;

        $instance = $this->instance($data);

        $instance->save();
    }

    /**
     * Update the specified object
     *
     * @param  array $data PUT data from the request.
     *
     * @return object Updated object.
     */
    public function updateById($id, $data)
    {
        $validator = $this->validate($data, $this->model->rules);

        // Check if validator returned an array with the error code and the message
        if (is_array($validator)) return $validator;

        $instance = $this->findById($id);

        // ADD DATA HERE

        $instance->save();
    }

    /**
    * Delete the specified object
    *
    * @param  int $id ID of the object.
    *
    * @return
    */
    public static function destroy($id)
    {
        // Find the object.
        $result = $this->model->findById($id);

        // Delete the object.
        $result->delete();

        // Check for deletion and redirect.
        if (!$this->model->find($id)) {
            return 'success';
        } else {
            $error = array(
                'code'    => '404',
                'message' => 'Cannot delete object'
            );
            return $error;
        }
    }
}