<?php

namespace LaravelLiberu\Permissions\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Route;
use LaravelLiberu\DynamicMethods\Traits\Abilities;
use LaravelLiberu\Menus\Models\Menu;
use LaravelLiberu\Permissions\Enums\Types;
use LaravelLiberu\Permissions\Enums\Verbs;
use LaravelLiberu\Permissions\Exceptions\Permission as Exception;
use LaravelLiberu\Roles\Traits\HasRoles;
use LaravelLiberu\Tables\Traits\TableCache;

class Permission extends Model
{
    use Abilities, HasRoles, HasFactory, TableCache;

    protected $guarded = ['id'];

    protected $casts = ['is_default' => 'boolean'];

    public function menu()
    {
        return $this->hasOne(Menu::class);
    }

    public function getTypeAttribute()
    {
        return $this->type();
    }

    public function type(): string
    {
        if ($this->relationLoaded('menu') && $this->menu !== null) {
            return __(Types::Menu);
        }

        return Verbs::get($this->method()) ?? __(Types::Link);
    }

    public function method()
    {
        $methods = Route::getRoutes()->getByName($this->name)?->methods();

        return $methods[0] ?? null;
    }

    public function scopeImplicit($query)
    {
        return $query->whereIsDefault(true);
    }

    public function delete()
    {
        if ($this->roles()->exists()) {
            throw Exception::roles();
        }

        if ($this->menu()->exists()) {
            throw Exception::menu();
        }

        parent::delete();
    }
}
