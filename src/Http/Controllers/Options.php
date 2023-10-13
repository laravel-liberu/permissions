<?php

namespace LaravelLiberu\Permissions\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelLiberu\Permissions\Models\Permission;
use LaravelLiberu\Select\Traits\OptionsBuilder;

class Options extends Controller
{
    use OptionsBuilder;

    protected $model = Permission::class;
}
