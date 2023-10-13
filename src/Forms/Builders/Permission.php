<?php

namespace LaravelLiberu\Permissions\Forms\Builders;

use LaravelLiberu\Forms\Services\Form;
use LaravelLiberu\Permissions\Models\Permission as Model;
use LaravelLiberu\Roles\Models\Role;

class Permission
{
    private const TemplatePath = __DIR__.'/../Templates/permission.json';

    protected Form $form;

    public function __construct()
    {
        $this->form = (new Form($this->templatePath()))
            ->options('roles', Role::get(['name', 'id']));
    }

    public function create()
    {
        return $this->form->create();
    }

    public function edit(Model $permission)
    {
        return $this->form->edit($permission);
    }

    protected function templatePath(): string
    {
        return self::TemplatePath;
    }
}
