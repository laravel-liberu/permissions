<?php

namespace LaravelLiberu\Permissions\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelLiberu\Permissions\Tables\Builders\Permission;
use LaravelLiberu\Tables\Traits\Excel;

class ExportExcel extends Controller
{
    use Excel;

    protected $tableClass = Permission::class;
}
