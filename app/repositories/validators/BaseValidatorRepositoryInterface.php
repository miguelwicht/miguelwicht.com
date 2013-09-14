<?php

interface BaseValidatorRepositoryInterface
{
    public function validate($data, $rules);
}