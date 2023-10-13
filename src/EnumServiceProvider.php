<?php

namespace LaravelLiberu\Permissions;

use LaravelLiberu\Enums\EnumServiceProvider as ServiceProvider;
use LaravelLiberu\Permissions\Enums\Types;

class EnumServiceProvider extends ServiceProvider
{
    public $register = [
        'permissionTypes' => Types::class,
    ];
}
