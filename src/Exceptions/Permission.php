<?php

namespace LaravelLiberu\Permissions\Exceptions;

use Symfony\Component\HttpKernel\Exception\ConflictHttpException;

class Permission extends ConflictHttpException
{
    public static function roles()
    {
        return new self(__(
            'You cannot delete this permission while being set on role(s)'
        ));
    }

    public static function menu()
    {
        return new self(__(
            'You cannot delete this permission while being set on a menu'
        ));
    }
}
