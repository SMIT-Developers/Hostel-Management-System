<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('/dashboard');
    return view([App\Http\Controllers\Admin\DashboardController::class, 'index']);
 });

Route::get('/', [App\Http\Controllers\Admin\DashboardController::class, 'index']);
Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, '__construct']);




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function () {
    Route::get('/dashboard',[App\Http\Controllers\Admin\DashboardController::class, 'index'] );
     Route::get('/student',[App\Http\Controllers\Admin\StudentController::class, 'boysD'] );
     Route::get('/GirlsDetails',[App\Http\Controllers\Admin\GirlsDetailsController::class, 'girlsD'] );
     Route::get('/AssignS',[App\Http\Controllers\Admin\AssignSController::class, 'assignS'] );
     Route::get('/AddStudent',[App\Http\Controllers\Admin\AddStudentController::class, 'addS'] );
     Route::get('/ChangeHostel',[App\Http\Controllers\Admin\ChangeHostelController::class, 'changeHostel'] );


     Route::get('/AddBed',[App\Http\Controllers\Admin\AddBedController::class, 'addBed'] );

     Route::get('/hostel',[App\Http\Controllers\Admin\HostelController::class, 'index'] );

     Route::get('/AddRoom',[App\Http\Controllers\Admin\AddRoomController::class, 'addRoom'] );
     Route::get('/BoyHostelD',[App\Http\Controllers\Admin\BoyHostelDController::class, 'boyHostelD'] );


     Route::get('/ViewApp',[App\Http\Controllers\Admin\ViewAppController::class, 'viewAppeals'] );
     Route::get('/GirlHostelD',[App\Http\Controllers\Admin\GirlHostelDController::class, 'girlHostelD'] );


     Route::get('/WardenProSet',[App\Http\Controllers\Admin\WardenProSetController::class, 'wardenProSet'] );
     Route::get('/StudentProSet',[App\Http\Controllers\Admin\StudentProSetController::class, 'studentProSet'] );


     Route::get('/ChangeHostel',[App\Http\Controllers\Admin\ChangeHostelController::class, 'changeHostel'] );

    Route::get('/import-form',[BoysController::class, 'importForm'] );


});
