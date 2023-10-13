<?php

use Illuminate\Support\Facades\Route;
use LaravelLiberu\Permissions\Http\Controllers\Create;
use LaravelLiberu\Permissions\Http\Controllers\Destroy;
use LaravelLiberu\Permissions\Http\Controllers\Edit;
use LaravelLiberu\Permissions\Http\Controllers\ExportExcel;
use LaravelLiberu\Permissions\Http\Controllers\InitTable;
use LaravelLiberu\Permissions\Http\Controllers\Options;
use LaravelLiberu\Permissions\Http\Controllers\Store;
use LaravelLiberu\Permissions\Http\Controllers\TableData;
use LaravelLiberu\Permissions\Http\Controllers\Update;

Route::middleware(['api', 'auth', 'core'])
    ->prefix('api/system/permissions')->as('system.permissions.')
    ->group(function () {
        Route::get('create', Create::class)->name('create');
        Route::post('', Store::class)->name('store');
        Route::get('{permission}/edit', Edit::class)->name('edit');
        Route::patch('{permission}', Update::class)->name('update');
        Route::delete('{permission}', Destroy::class)->name('destroy');

        Route::get('initTable', InitTable::class)->name('initTable');
        Route::get('tableData', TableData::class)->name('tableData');
        Route::get('exportExcel', ExportExcel::class)->name('exportExcel');
        Route::get('options', Options::class)->name('options');
    });
