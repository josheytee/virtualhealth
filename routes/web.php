<?php

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

use VirtualHealth\Doctor;

Route::get('/', function () {
    $doctors = Doctor::all();
    return view('index', compact('doctors'));
});
Route::get('/patient', function () {
    return view('welcome');
});
Route::get('/session', function () {
    return view('welcome');
});
Route::get('/doctors', 'DoctorController@index')->name('doctors');
Route::get('/doctors/browse', 'DoctorController@all')->name('doctors.all');
Route::get('/doctors/home', 'DoctorController@home')->name('doctors.home');
Route::get('/doctor/{username}', 'DoctorController@profile')->name('doctor');
Route::get('/doctors/search', 'DoctorController@search')->name('doctor.search');

Route::get('/doctors/session/{session}', 'SessionController@showDoctor')->name('doctors.session');
Route::get('/session/{session}', 'SessionController@show')->name('session');
Route::get('/session/chat/{session}', 'SessionController@chats')->name('session.chat');
Route::post('/sessions/sendUserChat', 'SessionController@sendUserChat')->name('session.user.send_chat');
Route::post('/sessions/sendDoctorChat', 'SessionController@sendDoctorChat')->name('session.doctor.send_chat');
Route::post('/sessions/sendUserFile', 'SessionController@sendUserFile');
Route::post('/sessions/sendDoctorFile', 'SessionController@sendDoctorFile');
Route::post('/sessions/{session}/download/{file}', 'SessionController@handleDownload');

Route::get('/specialties', 'SpecialtyController@all')->name('specialties');
Route::get('/specialty/{slug}', 'SpecialtyController@single')->name('specialty');
//Route::get('/specialty/}', 'SpecialtyController@sendChat')->name('specialty');
//Route::get('/session/{name}', 'SessionController@show')->name('session');

Auth::routes();

Route::get('/home', 'UserController@index')->name('home');
Route::get('/profile', 'UserController@profile')->name('profile');
Route::get('/profile/edit', 'UserController@edit')->name('profile.edit');

Route::namespace('Doctor')->group(function () {
    Route::prefix('doctors')->group(function () {
        // Controllers Within The "App\Http\Controllers\Admin" Namespace
        $this->get('login', 'Auth\LoginController@showLoginForm')->name('doctors.login');
        $this->post('login', 'Auth\LoginController@login');
        $this->post('logout', 'Auth\LoginController@logout')->name('doctors.logout');

// Registration Routes...
        $this->get('register', 'Auth\RegisterController@showRegistrationForm')->name('doctors.register');
        $this->post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
        $this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('doctors.password.request');
        $this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('doctors.password.email');
        $this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('doctors.password.reset');
        $this->post('password/reset', 'Auth\ResetPasswordController@reset');
    });
});

Route::get('/alertBox', function () {
    return view('listener');
});
Route::get('/fireEvent', function () {
    event(new \VirtualHealth\Events\EventTrigger());
});
//Route::get('/chat', 'ChatController@index')->name('chat.index');
//Route::get('/chat/{id}', 'ChatController@show')->name('chat.show');

