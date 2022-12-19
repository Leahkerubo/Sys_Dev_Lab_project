<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomeAdminController;

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



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

/**
 * @description show homepage of the site
 */
route::get('/redirect',[HomeController::class,'redirect']);

route::get('/',[HomeController::class,'index']);

//index2
route::get('/index2',[HomeAdminController::class,'my_index']);

//Auth::routes();

Route::get('/home', 'HomeAdminController@index')->name('home');
Route::get('/profile', 'HomeAdminController@profile')->name('profile');
Route::get('/profile/edit', 'HomeAdminController@profileEdit')->name('profile.edit');
Route::put('/profile/update', 'HomeAdminController@profileUpdate')->name('profile.update');
Route::get('/profile/changepassword', 'HomeAdminController@changePasswordForm')->name('profile.change.password');
Route::post('/profile/changepassword', 'HomeAdminController@changePassword')->name('profile.changepassword');

Route::group(['middleware' => ['auth','role:Admin']], function () 
{
    Route::get('/roles-permissions', 'RolePermissionController@roles')->name('roles-permissions');
    Route::get('/role-create', 'RolePermissionController@createRole')->name('role.create');
    Route::post('/role-store', 'RolePermissionController@storeRole')->name('role.store');
    Route::get('/role-edit/{id}', 'RolePermissionController@editRole')->name('role.edit');
    Route::put('/role-update/{id}', 'RolePermissionController@updateRole')->name('role.update');

    Route::get('/permission-create', 'RolePermissionController@createPermission')->name('permission.create');
    Route::post('/permission-store', 'RolePermissionController@storePermission')->name('permission.store');
    Route::get('/permission-edit/{id}', 'RolePermissionController@editPermission')->name('permission.edit');
    Route::put('/permission-update/{id}', 'RolePermissionController@updatePermission')->name('permission.update');

    Route::get('assign-subject-to-class/{id}', 'GradeController@assignSubject')->name('class.assign.subject');
    Route::post('assign-subject-to-class/{id}', 'GradeController@storeAssignedSubject')->name('store.class.assign.subject');

    Route::resource('assignrole', 'RoleAssign');
    Route::resource('classes', 'GradeController');
    Route::resource('subject', 'SubjectController');
    Route::resource('teacher', 'TeacherController');
    Route::resource('parents', 'ParentsController');
    Route::resource('student', 'StudentController');
    Route::get('attendance', 'AttendanceController@index')->name('attendance.index');

});

Route::group(['middleware' => ['auth','role:Teacher']], function () 
{
    Route::post('attendance', 'AttendanceController@store')->name('teacher.attendance.store');
    Route::get('attendance-create/{classid}', 'AttendanceController@createByTeacher')->name('teacher.attendance.create');
});

Route::group(['middleware' => ['auth','role:Parent']], function () 
{
    Route::get('attendance/{attendance}', 'AttendanceController@show')->name('attendance.show');
});

Route::group(['middleware' => ['auth','role:Student']], function () {

});