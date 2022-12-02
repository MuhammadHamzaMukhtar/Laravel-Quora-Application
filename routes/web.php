<?php

use App\Http\Controllers\FeedController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/dashboard', [FeedController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('feed', FeedController::class);
    Route::post('/getLike', [FeedController::class, 'likes'])->name('getLike');
    Route::post('getComment', [FeedController::class, 'comment_likes'])->name('getComment');
    Route::post('getChildComment', [FeedController::class, 'child_comment_likes'])->name('getChildComment');
    Route::post('/getComments/{id}', [FeedController::class, 'storeComment'])->name('comments_store');
    Route::post('/getReply/{comment_id}/{post_id}', [FeedController::class, 'addReply'])->name('addReply');
    Route::get('/delete_comment/{id}', [FeedController::class, 'deleteComment'])->name('deleteComment');
    Route::get('/delete_reply/{id}', [FeedController::class, 'deleteReply'])->name('deleteReply');
    Route::post('/edit_Comment/{id}', [FeedController::class, 'editComment'])->name('editComment');
    Route::post('/edit_Reply/{id}', [FeedController::class, 'editReply'])->name('editReply');
});

require __DIR__.'/auth.php';
