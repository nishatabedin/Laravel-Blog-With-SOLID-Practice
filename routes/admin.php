<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\WriterController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PostController;


//Sample Route   


// Route::get('/', function () {
//     return view('welcome');
// });



// Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () {
//     Route::get('/posts', ['uses' => 'PostController@posts', 'as' => 'posts.index']);
// });





//  Name Prefixes
// Route::name('admin.')->group(function () {
//     Route::get('/users', function () {
//         // Route assigned name "admin.users"...
//     })->name('users');
// });





// Route Prefixes
// Route::prefix('admin')->group(function () {
//     Route::get('/users', function () {
//         // Matches The "/admin/users" URL
//     });
// });




// Route::namespace('Admin')->middleware(['admin'])->group(function() {
//     Route::get('/posts', 'PostController@index');
// })



//Sample Route  end 




Route::group(['middleware' => 'admin_auth'], function () {
    Route::get('/', [LoginController::class, 'showAdminLoginForm'])->name('admin.login');
    Route::post('/', [LoginController::class, 'processLogin']);
});

Route::group(['middleware' => ['admin_guest']], function () {
    Route::get('/dashboard', [AdminController::class, 'showAdminDashboard'])->name('admin.dashboard');

    Route::get('/all_writer', [WriterController::class, 'showAllWriter'])->name('admin.all_writer');
    Route::get('/add_writer', [WriterController::class, 'showAddWriterForm'])->name('admin.writer');
    Route::post('/add_writer', [WriterController::class, 'storeWriter']);
    Route::put('/update_writer/{id}', [WriterController::class, 'updateWriter']);

    Route::get('/all_category', [CategoryController::class, 'showAllCategory'])->name('admin.all_category');
    Route::get('/add_category', [CategoryController::class, 'showAddCategoryForm'])->name('admin.category');
    Route::post('/add_category', [CategoryController::class, 'storeCategory']);
    Route::put('/update_category/{id}', [CategoryController::class, 'updateCategory']);


    Route::get('/all_post', [PostController::class, 'showAllPost'])->name('admin.all_post');
    Route::get('/add_post', [PostController::class, 'showAddPostForm'])->name('admin.post');
    Route::post('/add_post', [PostController::class, 'storePost']);
    Route::put('/update_post/{id}', [PostController::class, 'updatePost']);
});
