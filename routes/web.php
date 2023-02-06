<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Auth\LoginController;

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\User\UserDetailController;
use App\Http\Controllers\Admin\Document\DocumentController;
use App\Http\Controllers\Admin\Department\DepartmentController;
use App\Http\Controllers\Admin\Mapping\UsermappingController;

use App\Http\Controllers\Section\SectionController;
use App\Http\Controllers\Section\Document\DocumentManagementController;


use App\Http\Controllers\Department\DepartmentheadController;


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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[Controller::class,'index'])->name('welcome');


Route::middleware(['middleware'=>'preventBackHistory'])->group(function () 
{
    Auth::routes();
    Route::get('/',[Controller::class,'index'])->name('welcome');

});

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix'=>'admin', 'middleware'=>['isAdmin','auth','is_user_verify_email','preventBackHistory']], function()
{
    
Route::get('dashboard',[AdminController::class,'index'])->name('admin.dashboard');

//[Routing for userdetails Start]
Route::get('user-list',[UserDetailController::class,'index'])->name('admin.user-list');
Route::get('user-creation',[UserDetailController::class,'createUser'])->name('admin.user-creation');
Route::post('usercreation',[UserDetailController::class,'storeUser'])->name('admin.userreg');
Route::get ('list/{id}/userstatuschange/{status}',[UserDetailController::class,'UserStatusChange'])->name('admin.userstatuschange');

Route::get ('list/{userlist}/destroy',[UserDetailController::class,'destroy'])->name('admin.userremove');

Route::get ('changePassword/{id}/change',[UserDetailController::class,'changePassword'])->name('admin.passwrodedit');
Route::put ('passwordupdate/{changePasswordUpdate}',[UserDetailController::class,'updatePassowrd'])->name('admin.passwordupdate');

//[Routing for userdetails end]


//[Routing for department Start]
Route::get('departmentlist',[DepartmentController::class,'index'])->name('admin.departmentlist');
Route::get('createdepartment',[DepartmentController::class,'create'])->name('admin.createdepartment');
Route::post ('createdepartment',[DepartmentController::class,'store'])->name('admin.createdepartment');
Route::get ('/departmentlist/{id}/departmentstatuschange/{status}',[DepartmentController::class,'statusChange'])->name('admin.departmentstatuschange');
Route::get ('departmentlist/{departmentlist}/destroy',[DepartmentController::class,'destroy'])->name('admin.departmentremove');
Route::get ('departmentlist/{id}/edit',[DepartmentController::class,'edit'])->name('admin.departmentlistedit');
Route::put ('departmentlist/{departmentlistupdate}',[DepartmentController::class,'update'])->name('admin.departmentlistupdate');

//[Routing for department End]

//[Routing for mapping]

Route::get('user-mapping',[UsermappingController::class,'index'])->name('admin.user-mapping');
Route::get('create-mapping',[UsermappingController::class,'create'])->name('admin.create-mapping');
Route::post ('postmapping',[UsermappingController::class,'store'])->name('admin.postmapping');
Route::get ('mapping/{id}/mappingstatuschange/{status}',[UsermappingController::class,'mappingStatusChange'])->name('admin.mappingstatuschange');

//[Routing for mapping End]

//[Routing for documents Start]
Route::get('document-list',[DocumentController::class,'getDocument'])->name('admin.document-list');
Route::get('document-list-approval-pending',[DocumentController::class,'getPendingDocument'])->name('admin.document-list-approval-pending');
//Route::get ('documentlist/{id}/documentstatuschange/{status}',[DepartmentheadController::class,'statusChange'])->name('department.documentstatuschange');

//[Routing for documents end]

});



Route::group(['prefix'=>'section', 'middleware'=>['isSection','auth','is_user_verify_email','preventBackHistory']], function()
{
    
Route::get('dashboard',[SectionController::class,'index'])->name('section.dashboard');

//[Routing for documents Start]
Route::get('document-list',[DocumentManagementController::class,'index'])->name('section.document-list');
Route::get('mapping-check',[DocumentManagementController::class,'mappingCheck'])->name('section.warning-mapping');
Route::get('createdocument',[DocumentManagementController::class,'create'])->name('section.createdocument');
Route::post('createdocument',[DocumentManagementController::class,'store'])->name('section.storedocument');
Route::get ('documentlist/{id}/documentstatuschange/{status}',[DocumentManagementController::class,'statusChange'])->name('section.documentstatuschange');
Route::get ('documentlist/{id}/edit',[DocumentManagementController::class,'edit'])->name('section.documentlistedit');
Route::put ('documentlist/{documentlistupdate}',[DocumentManagementController::class,'update'])->name('section.documentlistupdate');

Route::get('document-list-approval-pending',[DocumentManagementController::class,'getPendingDocument'])->name('section.document-list-approval-pending');
//[Routing for documents end]

});


Route::group(['prefix'=>'department', 'middleware'=>['isDepartment','auth','is_user_verify_email','preventBackHistory']], function()
{
    
Route::get('dashboard',[DepartmentheadController::class,'index'])->name('department.dashboard');
Route::get('user-list',[DepartmentheadController::class,'getUser'])->name('department.user-list');
Route::get('departmentlist',[DepartmentheadController::class,'getDepartment'])->name('department.departmentlist');
Route::get('user-mapping',[DepartmentheadController::class,'mapping'])->name('department.user-mapping');

//[Routing for documents Start]
Route::get('document-list',[DepartmentheadController::class,'getDocument'])->name('department.document-list');
Route::get('document-list-approval-pending',[DepartmentheadController::class,'getPendingDocument'])->name('department.document-list-approval-pending');
Route::get ('documentlist/{id}/documentstatuschange/{status}',[DepartmentheadController::class,'statusChange'])->name('department.documentstatuschange');

//[Routing for documents end]

});


