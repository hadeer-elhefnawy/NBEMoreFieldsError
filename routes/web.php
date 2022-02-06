<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\new_acc_matrix_controller;
use App\Http\Controllers\maintenance_controller;
use App\Http\Controllers\reports_controller;
use App\Http\Controllers\batch_controller;
use App\Http\Controllers\online_controller;
use App\Http\Controllers\branch_restriction_controller;
use App\Http\Controllers\acc_class_restriction_controller;
use App\Http\Controllers\grant_rights_controller;
use App\Http\Controllers\queue_rights_controller;
use App\Http\Controllers\password_restriction_controller;
use App\Http\Controllers\branch_limit_controller;
use App\Http\Controllers\process_stage_rights_controller;
use App\Http\Controllers\web_branch_controller;
use App\Http\Controllers\product_posting_allowed_controller;
use App\Http\Controllers\product_Access_allowed_controller;
use App\Http\Controllers\group_restriction_controller;
use App\Http\Controllers\node_gl_controller;
use App\Http\Controllers\exceptional_leaf_gl_controller;
use App\Http\Controllers\MyController;

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


// Route::get('Maintenance', [MyController::class, 'importExportView']);
// Route::get('export', [MyController::class, 'export'])->name('export');
// Route::post('import', [MyController::class, 'import'])->name('import');

Route::resource('/NewAccessMatrix',new_acc_matrix_controller::class);
// Route::resource('/Maintenance',maintenance_controller::class);
Route::get('export', [maintenance_controller::class, 'export'])->name('export');
Route::resource('/Reports',reports_controller::class);
Route::resource('/Batch',batch_controller::class);
Route::resource('/Online',online_controller::class);
Route::resource('/BranchRestriction',branch_restriction_controller::class);
Route::resource('/AccClassRestriction',acc_class_restriction_controller::class);
Route::resource('/GrantRights',grant_rights_controller::class);
Route::resource('/QueueRights',queue_rights_controller::class);
Route::resource('/PasswordRestriction',password_restriction_controller::class);
Route::resource('/BranchLimit',branch_limit_controller::class);
Route::resource('/ProcessStageRights',process_stage_rights_controller::class);
Route::resource('/WebBranch',web_branch_controller::class);
Route::resource('/ProductPostingAllowed',product_posting_allowed_controller::class);
Route::resource('/ProductAccessAllowed',product_Access_allowed_controller::class);
Route::resource('/GroupRestriction',group_restriction_controller::class);
Route::resource('/NodeGl',node_gl_controller::class);
Route::resource('/ExceptionalLeafGl',exceptional_leaf_gl_controller::class);



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Auth::routes();

Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('/Maintenance',maintenance_controller::class);
});


Route::get('wizard', function () {
    return view('default');

});


