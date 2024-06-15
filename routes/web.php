<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Folder\ViewFolder;
use App\Livewire\Folder\AddFolder;
use App\Livewire\Folder\EditFolder;
use App\Livewire\Folder\AccessRight;
use App\Livewire\Folder\NotifyList;
use App\Livewire\Document\AddDocument;

Route::middleware(['auth'])->group(function () {
    Route::get('/viewFolder', ViewFolder::class)->name('view-folder');
    Route::get('/addFolder', AddFolder::class)->name('add-folder');
    Route::get('/editFolder', EditFolder::class)->name('edit-folder');
    Route::get('/accessRight', AccessRight::class)->name('access-right');
    Route::get('/notifyList', NotifyList::class)->name('notify-list');

    Route::get('/addDocument', AddDocument::class)->name('add-document');
});

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
