<?php

namespace LaravelLiberu\Permissions\Enums;

use LaravelLiberu\Enums\Services\Enum;

class Verbs extends Enum
{
    protected static function data(): array
    {
        return [
            'HEAD' => Types::Read,
            'OPTIONS' => Types::Read,
            'GET' => Types::Read,
            'POST' => Types::Write,
            'PATCH' => Types::Write,
            'PUT' => Types::Write,
            'DELETE' => Types::Delete,
        ];
    }
}
