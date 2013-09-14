<?php

class Collaborator extends Eloquent {
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