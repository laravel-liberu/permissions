<?php

namespace LaravelLiberu\Permissions\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use LaravelLiberu\Helpers\Traits\FiltersRequest;

class ValidatePermission extends FormRequest
{
    use FiltersRequest;

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => ['required', $this->nameUnique()],
            'description' => 'required',
            'is_default' => 'required',
            'roles' => 'array',
        ];
    }

    protected function nameUnique()
    {
        return Rule::unique('permissions', 'name')
            ->ignore($this->route('permission')?->id);
    }
}
