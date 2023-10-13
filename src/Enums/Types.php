<?php

namespace LaravelLiberu\Permissions\Enums;

use LaravelLiberu\Enums\Services\Enum;

class Types extends Enum
{
    public const Read = 'Read';
    public const Write = 'Write';
    public const Delete = 'Delete';
    public const Link = 'Link';
    public const Menu = 'Menu';
}
