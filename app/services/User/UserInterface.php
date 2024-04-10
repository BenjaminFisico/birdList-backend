<?php

namespace App\Services\User;

interface UserInterface
{
    public function all();

    public function authenticate($data);

    public function create($data);

    public function updatePassword($data);

    public function enableAndDisable($id);

    public function update($user, $data);

    public function delete($id);

    public function find($id);

    public function getTaskList();
}