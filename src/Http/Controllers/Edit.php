<?php

namespace LaravelLiberu\Permissions\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelLiberu\Permissions\Forms\Builders\Permission;
use LaravelLiberu\Permissions\Models\Permission as Model;

class Edit extends Controller
{
    public function __invoke(Model $permission, Permission $form)
    {
        return ['form' => $form->edit($permission)];
    }
}
