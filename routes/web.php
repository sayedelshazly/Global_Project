<?php
use App\Http\Controllers\PostsController;
use App\Http\Controllers\AskController;
use App\Mail\testMail;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->middleware('auth');



Route::get('/send', function () {
    Mail::to('selshazly724@gmail.com')->send(new testMail);
    return response('done00');
});

Route::resource('ask', AskController::class);

// Route::get('posts/restore/{id}', [PostsController::class, 'restore'])->name('restore')->middleware('check_user');
// Route::get('posts/forcedelete/{id}', [PostsController::class, 'forceDelete'])->name('forcedelete')->middleware('check_user');

Route::middleware(['check_user', 'auth'])->group(function () {
    Route::resource('posts', PostsController::class);
    Route::get('posts/restore/{id}', [PostsController::class, 'restore'])->name('restore');
    Route::get('posts/forcedelete/{id}', [PostsController::class, 'forceDelete'])->name('forcedelete');
});

Auth::routes();

