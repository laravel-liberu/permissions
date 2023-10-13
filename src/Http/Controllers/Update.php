<?php

namespace LaravelLiberu\Permissions\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelLiberu\Permissions\Http\Requests\ValidatePermission;
use LaravelLiberu\Permissions\Models\Permission;

class Update extends Controller
{
    public function __invoke(ValidatePermission $request, Permission $permission)
    {
        $permission->updateWithRoles(
            $request->validatedExcept('roles'),
            $request->get('roles')
        );

        return ['message' => __('The permission was successfully updated')];
    }
}
