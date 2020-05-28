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

Route::get('/', function () {
    return view('welcome');
});

//New Admin 

Route::get('admin/dashboard',array('as'=>'dashboard','uses'=>'AdminPanel\DashboardController@index'));
Route::get('admin/profile',array('as'=>'adminprofile','uses'=>'AdminPanel\ProfileDetailsController@index'));
Route::get('admin/institute',array('as'=>'instituteregistration','uses'=>'AdminPanel\DashboardController@getinstitute'));
Route::get('admin/institute/profile/{id}',array('as'=>'instituteregistrationprofile','uses'=>'AdminPanel\InstituteProfileController@index'));
Route::get('admin/school',array('as'=>'schoolregistration','uses'=>'AdminPanel\DashboardController@getschool'));
Route::get('admin/enquiry',array('as'=>'enquiry','uses'=>'AdminPanel\DashboardController@getcontact'));
Route::get('admin/contact',array('as'=>'contact','uses'=>'AdminPanel\DashboardController@getenquiry'));
Route::get('changeStatus', array('as'=>'changesatus','uses'=>'AdminPanel\InstituteProfileController@changeStatus'));
Route::post('mailsend', array('as'=>'mailsend','uses'=>'AdminPanel\MailsendController@mailsend'));


//Admin Panel
//Route::get('admin/dashboard',array('as'=>'dashboard','uses'=>'Admin\DashboardController@index'));
//Route::get('admin/profile',array('as'=>'profile','uses'=>'Admin\ProfileDetailsController@index'));
//Route::get('admin/institute',array('as'=>'instituteregistration','uses'=>'Admin\DashboardController@getinstitute'));
//Route::get('admin/institute/profile/{id}',array('as'=>'instituteregistrationprofile','uses'=>'Admin\InstituteProfileController@index'));
//Route::get('admin/school',array('as'=>'schoolregistration','uses'=>'Admin\DashboardController@getschool'));
//Route::get('changeStatus', array('as'=>'changesatus','uses'=>'Admin\InstituteProfileController@changeStatus'));


Route::get('admin/registraion',array('as'=>'registration','uses'=>'Admin\AdminRegistrationController@index'));
Route::post('admin/registraion',array('as'=>'registration','uses'=>'Admin\AdminRegistrationController@store'));
Route::get('login',array('as'=>'login','uses'=>'Admin\AdminLoginController@index'));
Route::post('login',array('as'=>'login','uses'=>'Admin\AdminLoginController@store'));
Route::get('logout',array('as'=>'logout','uses'=>'Admin\AdminLoginController@logout'));
Route::get('welcome', array('as' => 'welcome', 'uses' => function(){
    return view('admin.pages.authentication.welcome');
}));
Route::get('auth/{service}',array('as'=>'fbregistration','uses'=>'Auth\AuthController@redirectToProvider'));
Route::get('auth/{service}/callback', 'Auth\AuthController@handleProviderCallback');

//After Login Redirect This Page
Route::get('home', array('as' => 'home', 'uses' => 'DashboardController@index'));

//Logout
Route::get('auth/logout', 'Auth\AuthController@getLogout');


//Front
Route::get('home',array('as'=>'fronthome','uses'=>'Front\HomeController@index'));
Route::post('home',array('as'=>'fronthome','uses'=>'Front\HomeController@contactStore'));
Route::post('home/enquiry',array('as'=>'saveenquiry','uses'=>'Front\HomeController@enquiryStore'));

//Institute Registration
Route::get('registration','Institute\DropdownController@index');
Route::get('get-city-list','Institute\DropdownController@getCityList');

Route::get('get-option-list','Institute\BatchController@getOptionList');


Route::get('institute/registration',array('as'=>'instituteRegistration','uses'=>'Institute\RegistrationController@index'));
Route::post('institute/registration',array('as'=>'instituteRegistration','uses'=>'Institute\RegistrationController@store'));
Route::post('otp',array('as'=>'otpverification','uses'=>'Institute\RegistrationController@verify'));
Route::post('password',array('as'=>'pwdgeneration','uses'=>'Institute\RegistrationController@pwdgeneration'));
Route::post('service',array('as'=>'service','uses'=>'Institute\RegistrationController@service'));
Route::post('profile',array('as'=>'profile','uses'=>'Institute\RegistrationController@profile'));
Route::get('qr-code-g',array('as'=>'qrview','uses'=>'Institute\DashboardController@qrcode'));

//Institute Details
Route::get('institute/dashboard',array('as'=>'instituteDashboard','uses'=>'Institute\DashboardController@index'));
Route::post('institute/dashboard',array('as'=>'instituteDashboardstore1','uses'=>'Institute\DashboardController@store_tab1'));
Route::post('institute/dashboard/tab2',array('as'=>'instituteDashboardstore2','uses'=>'Institute\DashboardController@store_tab2'));
Route::post('institute/dashboard/tab3',array('as'=>'instituteDashboardstore3','uses'=>'Institute\DashboardController@store_tab3'));
Route::post('institute/dashboard/tab4',array('as'=>'instituteDashboardstore4','uses'=>'Institute\DashboardController@store_tab4'));

//course
Route::get('institute/course/{id}',array('as'=>'instituteCourse','uses'=>'Institute\CourseController@index'));
Route::post('institute/course',array('as'=>'instituteCourse','uses'=>'Institute\CourseController@store'));
Route::post('institute/course/{id}',array('as'=>'instituteCourseupdate','uses'=>'Institute\CourseController@update'));
Route::get('institute/course/delete/{id}',array('as'=>'instituteCoursedelete','uses'=>'Institute\CourseController@destroy'));
Route::post('institute/course/{id}/document',array('as'=>'instituteCourseDocument','uses'=>'Institute\DocumentController@store'));
Route::post('institute/course/{id}/fees',array('as'=>'instituteCourseFee','uses'=>'Institute\FeeController@store'));
Route::post('institute/course/fee/option',array('as'=>'institutefeesupdate','uses'=>'Institute\FeeController@updateOption'));
Route::get('institute/course/optiondelete/{id}',array('as'=>'deleteoption','uses'=>'Institute\FeeController@delete'));
Route::get('institute/allcourses',array('as'=>'instituteAllCourse','uses'=>'Institute\AllCourseController@index'));

//Institute profile
Route::get('institute/profile',array('as'=>'instituteProfile','uses'=>'Institute\ProfileController@index'));
Route::post('institute/profile/tab1/{id}',array('as'=>'instituteProfileupdatetab1','uses'=>'Institute\EditProfileSetupController@update_tab1'));
Route::post('institute/profile/tab2/{id}',array('as'=>'instituteProfileupdatetab2','uses'=>'Institute\EditProfileSetupController@update_tab2'));
Route::post('institute/profile/tab3/{id}',array('as'=>'instituteProfileupdatetab3','uses'=>'Institute\EditProfileSetupController@update_tab3'));
Route::post('institute/profile/tab4/{id}',array('as'=>'instituteProfileupdatetab4','uses'=>'Institute\EditProfileSetupController@update_tab4'));
Route::post('institute/profile/{id}',array('as'=>'instituteProfileupdatetab5','uses'=>'Institute\EditProfileSetupController@update_tab5'));
Route::get('institute/profile/setup',array('as'=>'instituteProfilesetup','uses'=>'Institute\ProfileSetupContoller@index'));
Route::get('institute/profile/edit',array('as'=>'instituteProfileEdit','uses'=>'Institute\EditProfileSetupController@index'));
Route::get('institute/profile/changepassword',array('as'=>'instituteProfilechangepassword','uses'=>'Institute\ChangePasswordController@index'));
Route::post('institute/profile/changepassword/{id}',array('as'=>'institutechangepassword','uses'=>'Institute\ChangePasswordController@sendlink'));

//student
Route::get('institute/studentlist',array('as'=>'instituteStudentList','uses'=>'Institute\StudentListController@index'));
Route::get('institute/student/add',array('as'=>'instituteStudentAdd','uses'=>'Institute\StudentController@index'));
Route::post('institute/student/add',array('as'=>'instituteStudentAdd','uses'=>'Institute\StudentController@store'));
Route::get('institute/studentlist/edit/{id}',array('as'=>'instituteStudentEdit','uses'=>'Institute\StudentEditController@edit'));
Route::post('institute/studentlist/edit/{id}',array('as'=>'instituteStudentEdit','uses'=>'Institute\StudentEditController@update'));
Route::get('institute/studentlist/delete/{id}',array('as'=>'instituteStudentDelete','uses'=>'Institute\StudentListController@delete'));


//batch 
Route::get('institute/batchlist',array('as'=>'instituteBatchList','uses'=>'Institute\BatchListController@view'));
Route::get('institute/batch/add',array('as'=>'instituteBatchAdd','uses'=>'Institute\BatchController@view'));
Route::post('institute/batch/add',array('as'=>'instituteBatchAdd','uses'=>'Institute\BatchController@store'));
Route::get('institute/batchlist/edit/{id}',array('as'=>'instituteBatchEdit','uses'=>'Institute\BatchEditController@edit'));
Route::post('institute/batchlist/edit/{id}',array('as'=>'instituteBatchEdit','uses'=>'Institute\BatchEditController@update'));

//attendance
Route::get('institute/batch',array('as'=>'instituteBatch','uses'=>'Institute\BatchController@index'));
Route::get('institute/attendance/{id}',array('as'=>'instituteAttendance','uses'=>'Institute\AttendaceContoller@index'));
Route::post('institute/attendance/{id}',array('as'=>'saveattendance','uses'=>'Institute\AttendaceContoller@store'));

//report
Route::get('institute/report',array('as'=>'instituteReport','uses'=>'Institute\ReportController@index'));
Route::post('institute/report',array('as'=>'instituteReport','uses'=>'Institute\ReportController@view'));
Route::get('downloadExcel/{type}', array('as'=>'instituteReportExcel','uses'=>'Institute\ReportController@downloadExcel'));

//Installment
Route::get('institute/installment',array('as'=>'instituteInstallment','uses'=>'Institute\InstallmentController@index'));
Route::get('institute/installment/details/{id}',array('as'=>'instituteInstallmentDetails','uses'=>'Institute\InstallmentDetailsController@index'));
Route::post('institute/installment/details/{id}',array('as'=>'instituteInstallmentDetails','uses'=>'Institute\InstallmentDetailsController@store'));

//TimeTable

Route::get('institute/timetable',array('as'=>'instituteTimetable','uses'=>'Institute\TimetableController@index'));
Route::post('institute/timetable',array('as'=>'instituteTimetable','uses'=>'Institute\TimetableController@index'));

//Student

Route::get('student/dashboard',array('as'=>'studentdashboard','uses'=>'Student\DashboardController@index'));
//for testing
Route::get('institute/test',array('as'=>'instituteAllCoursetest','uses'=>'Admin\DashboardController@index'));





// Auth::routes();

// Route::get('/home', 'HomeController@index');
