<?php

class Project extends Eloquent {
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

    public function collaborators()
    {
        return $this->belongsToMany('Collaborator')->orderBy('last_name', 'asc');
    }

    public function tags()
    {
        return $this->belongsToMany('Tag');
    }

    public function projectImages()
    {
        return $this->hasMany('ProjectImage');
    }
}