<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EditorController;
use App\Http\Controllers\{PostController, CompanyController, JobController, UserController};
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Job;

// Public pages
Route::get('/', fn() => view('pages.home'));
Route::get('/about', fn() => view('pages.about'))->name('about');

Route::get('/companies', function () {
    $companies = \App\Models\Company::latest()->get();
    return view('pages.companies', compact('companies'));
})->name('companies');

Route::get('/library', function () {
    $posts = Post::where('published', true)->latest()->get();
    return view('pages.library', compact('posts'));
})->name('library');

Route::get('/blog', function () {
    $posts = \App\Models\Post::latest()->get();
    return view('pages.blog', compact('posts'));
})->name('blog');

Route::get('/apply', fn() => view('pages.apply'))
    ->middleware(['auth', 'verified'])
    ->name('apply');

Route::get('/work', function () {
    $jobs = Job::where('is_active', true)->latest()->with('company')->get();
    return view('pages.work', compact('jobs'));
})->name('work');

Route::get('/dashboard', fn() => view('dashboard'))
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

// Authenticated user routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Admin routes
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::view('/admin', 'admin.dashboard')->name('admin.home');

    Route::resource('/admin/companies', CompanyController::class)
        ->names('admin.companies'); 

    Route::resource('/admin/jobs', JobController::class)
        ->names('admin.jobs'); 

    Route::middleware(['auth', 'role:admin'])->group(function () {
        Route::resource('/admin/users', UserController::class)->names('admin.users');
    });
});

// Editor routes
Route::middleware(['auth', 'role:editor,admin'])->group(function () {
    Route::view('/editor', 'editor.dashboard')->name('editor.home');

    Route::resource('/editor/posts', PostController::class)
        ->names('editor.posts'); // matches cms/posts/
});


require __DIR__.'/auth.php';
