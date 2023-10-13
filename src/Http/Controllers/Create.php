<?php

namespace LaravelLiberu\Permissions\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelLiberu\Permissions\Forms\Builders\Permission;

class Create extends Controller
{
    public function __invoke(Permission $form)
    {
        return ['form' => $form->create()];
    }
}
