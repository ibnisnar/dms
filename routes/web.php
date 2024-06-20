<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Folder\ViewFolder;
use App\Livewire\Folder\AddFolder;
use App\Livewire\Folder\EditFolder;
use App\Livewire\Folder\AccessRight;
use App\Livewire\Folder\NotifyList;
use App\Livewire\Document\AddDocument;
use App\Livewire\Admin\Tools;

Route::middleware(['auth'])->prefix('folder')->group(function () {
    Route::get('/view', ViewFolder::class)->name('view-folder');
    Route::get('/add', AddFolder::class)->name('add-folder');
    Route::get('/edit', EditFolder::class)->name('edit-folder');
    Route::get('/access', AccessRight::class)->name('access-right');
    Route::get('/notify', NotifyList::class)->name('notify-list');
});
Route::middleware(['auth'])->prefix('document')->group(function () {
    Route::get('/add', AddDocument::class)->name('add-document');
});
Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/tools', Tools::class)->name('admin-tools');
});

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
