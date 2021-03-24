<?php

use App\Models\Documentation;
use Illuminate\Support\Facades\Route;
use Radiocubito\Wordful\Models\Post;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome', [
        'posts' => Post::published()->ofType('post')->orderBy('published_at', 'desc')->get(),
    ]);
});

Route::redirect('/docs', '/docs/introduction')->name('docs.index');

Route::get('/docs/{documentation:slug}', function (Documentation $documentation) {
    if (! $documentation->markdownExists()) {
        abort(404);
    }

    return view('docs.show', [
        'gettingStartedDocs' => Documentation::where('section', 'getting-started')->get(),
        'featuresDocs' => Documentation::where('section', 'features')->get(),
        'starterKitsDocs' => Documentation::where('section', 'starter-kits')->get(),
        'doc' => $documentation,
    ]);
})->name('docs.show');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
