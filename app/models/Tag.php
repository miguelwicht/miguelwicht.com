<?php

class Tag extends Eloquent {
    //protected $table = 'project_tags';

    protected $guarded = array();

    public static $rules = array();

    /*
    |--------------------------------------------------------------------------
    | Relations
    |--------------------------------------------------------------------------
    |
    | All model relations are defined here
    |
    */

    public function projects()
    {
        return $this->belongsToMany('Project');
    }
}