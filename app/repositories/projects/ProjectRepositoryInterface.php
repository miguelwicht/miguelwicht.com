<?php

/**
 * Interface for the Project model repositories.
 */
interface ProjectRepositoryInterface extends BaseRepositoryInterface
{
    public function findBySlug($slug);
}