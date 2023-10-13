<?php

namespace LaravelLiberu\Permissions\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelLiberu\Permissions\Tables\Builders\Permission;
use LaravelLiberu\Tables\Traits\Data;

class TableData extends Controller
{
    use Data;

    protected $tableClass = Permission::class;
}
