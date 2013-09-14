<?php

interface BaseRepositoryInterface
{
    public function findAll();

    public function findById($id);

    public function store($data);

    public function updateById($id, $data);

    public static function destroy($id);

    public function instance($data);
}