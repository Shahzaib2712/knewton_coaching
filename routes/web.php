<?php

use App\Http\Controllers\CoachingController;
use App\Http\Controllers\FaculityController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\FieldController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\AlumnaiController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\TDetailsController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\MessagesController;
use App\Http\Controllers\Frontend\WebController;
use App\Http\Controllers\Frontend\UserLoginController;
use App\Http\Controllers\Frontend\ULoginController;

use App\Http\Controllers\Frontend\UserMsgController;
use Illuminate\Support\Facades\Route;

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
Route::get ('/', function () {
    return view('DashboardView.index');
})->middleware('adminguard');


//Coaching Routes
Route::get('/coaching',[CoachingController::class ,'Coaching'])->middleware('adminguard');
Route::get('/coaching-add-coaching',[CoachingController::class ,'CoachingAddCoaching'])->middleware('adminguard');
Route::post('/coaching-add-coaching/store',[CoachingController::class ,'CoachingAddCoachingStore'])->middleware('adminguard');
Route::get('/coaching-edit-coaching/{id}',[CoachingController::class ,'CoachingEditCoaching'])->middleware('adminguard');
Route::post('/coaching-update-coaching/{id}',[CoachingController::class ,'CoachingUpdateCoaching'])->middleware('adminguard');
Route::get('/coaching-delete-coaching/{id}',[CoachingController::class ,'CoachingDeleteCoaching'])->middleware('adminguard');

//Faculity Routes
Route::get('/faculity',[FaculityController::class ,'Faculity'])->middleware('adminguard');
Route::get('/faculity-add-faculity',[FaculityController::class ,'FaculityAddFaculity'])->middleware('adminguard');
Route::post('/faculity-add-faculity/store',[FaculityController::class ,'FaculityStoreFaculity'])->middleware('adminguard');
Route::get('/faculity-edit-faculity/{id}',[FaculityController::class ,'FaculityEditFaculity'])->middleware('adminguard');
Route::post('/faculity-update-faculity/{id}',[FaculityController::class ,'FaculityUpdateFaculity'])->middleware('adminguard');
Route::get('/faculity-delete-faculity/{id}',[FaculityController::class ,'FaculityDeleteFaculity'])->middleware('adminguard');

//Student Routes
Route::get('/student',[StudentController::class ,'Student'])->middleware('adminguard');
Route::get('/student-add-student',[StudentController::class ,'StudentAddStudent'])->middleware('adminguard');
Route::post('/student-add-student/store',[StudentController::class ,'StudentStoreStudent'])->middleware('adminguard');
Route::get('/student-edit-student/{id}',[StudentController::class ,'StudentEditStudent'])->middleware('adminguard');
Route::post('/student-update-student/{id}',[StudentController::class ,'StudentUpdateStudent'])->middleware('adminguard');
Route::get('/student-delete-student/{id}',[StudentController::class ,'StudentDeleteStudent'])->middleware('adminguard');

//Class Routes
Route::get('/class',[ClassController::class ,'Class'])->middleware('adminguard');
Route::get('/class-add-class',[ClassController::class ,'ClassAddClass'])->middleware('adminguard');
Route::post('/class-add-class/store',[ClassController::class ,'ClassStoreClass'])->middleware('adminguard');
Route::get('/class-edit-class/{id}',[ClassController::class ,'ClassEditClass'])->middleware('adminguard');
Route::post('/class-update-class/{id}',[ClassController::class ,'ClassUpdateClass'])->middleware('adminguard');
Route::get('/class-delete-class/{id}',[ClassController::class ,'ClassDeleteClass'])->middleware('adminguard');

//Subject Routes
Route::get('/subject',[SubjectController::class ,'Subject'])->middleware('adminguard');
Route::get('/subject-add-subject',[SubjectController::class ,'SubjectAddSubject'])->middleware('adminguard');
Route::post('/subject-add-subject/store',[SubjectController::class ,'SubjectStoreSubject'])->middleware('adminguard');
Route::get('/subject-edit-subject/{id}',[SubjectController::class ,'SubjectEditSubject'])->middleware('adminguard');
Route::post('/subject-update-subject/{id}',[SubjectController::class ,'SubjectUpdateSubject'])->middleware('adminguard');
Route::get('/subject-delete-subject/{id}',[SubjectController::class ,'SubjectDeleteSubject'])->middleware('adminguard');

//Session Routes
Route::get('/session',[SessionController::class ,'Session'])->middleware('adminguard');
Route::get('/session-add-session',[SessionController::class ,'SessionAddSession'])->middleware('adminguard');
Route::post('/session-add-session/store',[SessionController::class ,'SessionStoreSession'])->middleware('adminguard');
Route::get('/session-edit-session/{id}',[SessionController::class ,'SessionEditSession'])->middleware('adminguard');
Route::post('/session-update-session/{id}',[SessionController::class ,'SessionUpdateSession'])->middleware('adminguard');
Route::get('/session-delete-session/{id}',[SessionController::class ,'SessionDeleteSession'])->middleware('adminguard');

//Field Routes
Route::get('/field',[FieldController::class ,'Field'])->middleware('adminguard');
Route::get('/field-add-field',[FieldController::class ,'FieldAddField'])->middleware('adminguard');
Route::post('/field-add-field/store',[FieldController::class ,'FieldStoreField'])->middleware('adminguard');
Route::get('/field-edit-field/{id}',[FieldController::class ,'FieldEditField'])->middleware('adminguard');
Route::post('/field-update-field/{id}',[FieldController::class ,'FieldUpdateField'])->middleware('adminguard');
Route::get('/field-delete-field/{id}',[FieldController::class ,'FieldDeleteField'])->middleware('adminguard');

//Test Routes
Route::get('/test',[TestController::class ,'Test'])->middleware('adminguard');
Route::get('/test-add-test',[TestController::class ,'TestAddTest'])->middleware('adminguard');
Route::post('/test-add-test/store',[TestController::class ,'TestStoreTest'])->middleware('adminguard');
Route::get('/test-edit-test/{id}',[TestController::class ,'TestEditTest'])->middleware('adminguard');
Route::post('/test-update-test/{id}',[TestController::class ,'TestUpdateTest'])->middleware('adminguard');
Route::get('/test-delete-test/{id}',[TestController::class ,'TestDeleteTest'])->middleware('adminguard');

//Alumnai Routes
Route::get('/alumnai',[AlumnaiController::class ,'Alumnai'])->middleware('adminguard');
Route::get('/alumnai-add-alumnai',[AlumnaiController::class ,'AlumnaiAddAlumnai'])->middleware('adminguard');
Route::post('/alumnai-add-alumnai/store',[AlumnaiController::class ,'AlumnaiStoreAlumnai'])->middleware('adminguard');
Route::get('/alumnai-edit-alumnai/{id}',[AlumnaiController::class ,'AlumnaiEditAlumnai'])->middleware('adminguard');
Route::post('/alumnai-update-alumnai/{id}',[AlumnaiController::class ,'AlumnaiUpdateAlumnai'])->middleware('adminguard');
Route::get('/alumnai-delete-alumnai/{id}',[AlumnaiController::class ,'AlumnaiDeleteAlumnai'])->middleware('adminguard');

//Announcement Routes
Route::get('/announcement',[AnnouncementController::class ,'Announcement'])->middleware('adminguard');
Route::get('/announcement-add-announcement',[AnnouncementController::class ,'AnnouncementAddAnnouncement'])->middleware('adminguard');
Route::post('/announcement-add-announcement/store',[AnnouncementController::class ,'AnnouncementStoreAnnouncement'])->middleware('adminguard');
Route::get('/announcement-edit-announcement/{id}',[AnnouncementController::class ,'AnnouncementEditAnnouncement'])->middleware('adminguard');
Route::post('/announcement-update-announcement/{id}',[AnnouncementController::class ,'AnnouncementUpdateAnnouncement'])->middleware('adminguard');
Route::get('/announcement-delete-announcement/{id}',[AnnouncementController::class ,'AnnouncementDeleteAnnouncement'])->middleware('adminguard');

//Student Test Routes
Route::get('/test-detail',[TDetailsController::class ,'testdetail'])->middleware('adminguard');
Route::get('/test-detail-add',[TDetailsController::class ,'testdetailAdd'])->middleware('adminguard');
Route::post('/test-detail-store',[TDetailsController::class ,'testdetailStore'])->middleware('adminguard');
Route::get('/test-detail-edit/{id}',[TDetailsController::class ,'testdetailEdit'])->middleware('adminguard');
Route::post('/test-detail-update/{id}',[TDetailsController::class ,'testdetailUpdate'])->middleware('adminguard');
Route::get('/test-detail-delete/{id}',[TDetailsController::class ,'testdetailDelete'])->middleware('adminguard');



//Messages
Route::get('/messages',[MessagesController::Class, 'messages']);




// Dashboard Login
Route::get('/login',[MainController::class ,'login']);
Route::post('/login-store',[MainController::class ,'loginstore']);
Route::get('/logout',[MainController::class ,'logout'])->middleware('adminguard');

Route::get('/session',function(){

    session()->flush();

    echo "<pre>";
    print_r(session()->all());

});









//Frontend Routes

Route::get('/home',[WebController::Class, 'home']);
Route::get('/aboutus',[WebController::Class, 'aboutus']);
Route::get('/contact',[WebController::Class, 'contact']);
Route::get('/announce',[WebController::Class, 'announce']);
Route::get('/announcedetails/{id}',[WebController::Class, 'announcedetails']);
Route::get('/teacher',[WebController::Class, 'teacher']);
Route::get('/web-student',[WebController::Class, 'std']); 


//UserMsg Route
Route::get('/user-home', [UserMsgController::Class,'user']); 
Route::post('/datainsert', [UserMsgController::Class,'DataInsert']); 



//User

Route::get('/userloginregis',[ULoginController::class,'userloginregis']);
Route::get('/admin/user/view',[ULoginController::class,'userindex']);
Route::get('/admin/user/delete/{id}',[ULoginController::class,'userdelete']);



Route::get('/userlogin',[ULoginController::Class, 'userlogin']);
Route::get('/userloginstore',[ULoginController::class,'userloginstore']);
Route::get('/userregister',[ULoginController::Class, 'userregister']);
Route::post('/userinsertstore',[ULoginController::class,'userregisterstore']);
Route::get('/user/logout',[ULoginController::class,'userlogout'])->middleware('Guard');
