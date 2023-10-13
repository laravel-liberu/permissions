<?php

namespace LaravelLiberu\Permissions\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelLiberu\Permissions\Models\Permission;

class Destroy extends Controller
{
    public function __invoke(Permission $permission)
    {
        $permission->delete();

        return [
            'message' => __('The permission was successfully deleted'),
            'redirect' => 'system.permissions.index',
        ];
    }
}
