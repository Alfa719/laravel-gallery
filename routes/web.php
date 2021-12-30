<?php

use App\Http\Controllers\{DashboardController, AlbumController, CommentController, MemberController, WebController};
use App\Http\Controllers\Admin\{DashboardController as AdminController, AccountController};
use Illuminate\Support\Facades\Route;

// Route Auth
Auth::routes();

// Route Admin
Route::prefix('admin')->middleware('auth', 'level:admin')->group(function () {
    Route::get('/', AdminController::class)->name('admin.dashboard');
    Route::prefix('album')->group(function () {
        Route::get('/', [AlbumController::class, 'index'])->name('admin.album.index');
        Route::get('show-album/{album:slug}', [AlbumController::class, 'show'])->name('admin.album.show');
    });
    Route::prefix('user')->group(function () {
        Route::get('/', [MemberController::class, 'index'])->name('admin.member.index');
        Route::get('show-user/{member:username}', [MemberController::class, 'edit'])->name('admin.member.show');
        Route::put('show-user/{member:username}/update', [MemberController::class, 'update'])->name('admin.member.update');
        Route::delete('user-delete/{member}', [MemberController::class, 'destroy'])->name('admin.member.delete');
        Route::get('verify-user', [MemberController::class, 'userVerify'])->name('admin.member.verify');
        Route::post('verify-user/{member}', [MemberController::class, 'userVerifyPost'])->name('admin.member.verify.post');
        Route::delete('verify-user/{member}', [MemberController::class, 'userVerifyDelete'])->name('admin.member.verify.delete');
    });
    Route::get('comment', [CommentController::class, 'index'])->name('admin.comment.index');
    Route::prefix('web-layout')->group(function () {
        Route::get('{web}', [WebController::class, 'index'])->name('admin.web.index');
        Route::put('{web}/background-image/update', [WebController::class, 'updateBackground'])->name('admin.web.updateBackground');
        Route::patch('{web}/web-content/update', [WebController::class, 'updateContent'])->name('admin.web.updateContent');
    });
    Route::prefix('profile')->group(function () {
        Route::get('/', [AccountController::class, 'index'])->name('admin.profile.index');
        Route::put('update-profile/{user:username}', [AccountController::class, 'update'])->name('admin.profile.update');
    });
});

// Route User
Route::get('/', DashboardController::class);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
