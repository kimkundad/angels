<?php

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

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/', 'HomeController@index');

Route::get('/บทความการเงิน', 'HomeController@blog');

Route::get('/blog_detail/{id}', 'HomeController@blog_detail');

Route::post('/api/add_contact', 'HomeController@add_contact')->name('add_contact');

Route::post('/api/add_contact_2', 'HomeController@add_contact_2')->name('add_contact_2');


Route::get('/about_us', function () {
    return view('about_us');
});

Route::get('/add_contact_first', function () {
    return view('add_contact_first');
});

Route::get('/contact_us', function () {
    return view('contact_us');
});

Route::get('/วางแผนการลงทุน', function () {
    return view('page1.page');
});
Route::get('/วางแผนเกษียณ', function () {
    return view('page1.page2');
});

Route::get('/วางแผนภาษี', function () {
    return view('page1.page3');
});

Route::get('/วางแผนการศึกษา', function () {
    return view('page1.page4');
});

Route::get('/วางแผนบริหารความเสี่ยง', function () {
    return view('page1.page5');
});

Route::get('/วางแผนมรดก', function () {
    return view('page1.page6');
});

/////////////////////////////////////////////////

Route::get('/สัมมนาให้ความรู้การเงินแก่พนักงาน', function () {
    return view('page2.page1');
});
Route::get('/ให้คำปรึกษาสร้างสวัสดิการแก่พนักงาน', function () {
    return view('page2.page2');
});
Route::get('/จัดตั้งกองทุนสำรองเลี้ยงชีพ', function () {
    return view('page2.page3');
});
Route::get('/ที่ปรึกษาด้านบัญชีและภาษีสำหรับองค์กร', function () {
    return view('page2.page4');
});
Route::get('/ที่ปรึกษาด้านการซื้อขายกิจการ', function () {
    return view('page2.page5');
});
Route::get('/ที่ปรึกษาการทำประกันชีวิต_บุคคลสำคัญขององค์กร', function () {
    return view('page2.page6');
});
Route::get('/จัดตั้งบริษัทโฮลดิ้ง_ทำแผนสืบทอดกิจการและธรรมนูญครอบครัว', function () {
    return view('page2.page7');
});

////////////////////////////////////

Route::get('/ประกันชีวิต', function () {
    return view('page3.page1');
});
Route::get('/ประกันวินาศภัย', function () {
    return view('page3.page2');
});
Route::get('/กองทุนรวม', function () {
    return view('page3.page3');
});
Route::get('/สินทรัพย์_ทางเลือก', function () {
    return view('page3.page4');
});

//////////////////////////////////////

Route::get('/คลาสสอนการเงินให้เด็กก่อนวัยรุ่น', function () {
    return view('page4.page2');
});
Route::get('/คลาสการเงินสำหรับผู้ใหญ่', function () {
    return view('page4.page3');
});

Route::get('/คำนวณการเงินแบบง่ายๆ', 'HomeController@get_doc');



Auth::routes();


Route::group(['middleware' => ['UserRole:manager|employee']], function() {


    Route::get('admin/dashboard', 'DashboardController@index');
    Route::get('admin/docs', 'DashboardController@docs');
    Route::post('api/post_docs', 'DashboardController@post_docs')->name('post_docs');
    Route::get('admin/pics', 'DashboardController@pics');
    Route::post('api/post_pics', 'DashboardController@post_pics')->name('post_pics');

    Route::resource('admin/blog', 'BlogController');
    Route::post('/api/upload_img', 'BlogController@upload_img')->name('home');
    Route::get('api/del_blog/{id}', 'BlogController@del_blog')->name('del_blog');

    Route::get('admin/index_b', 'BlogController@blog_index');
    
    Route::post('api/blog_status', 'BlogController@blog_status')->name('blog_status');

    Route::resource('admin/slide_show', 'SlideController');
    Route::post('api/slide_status', 'SlideController@slide_status')->name('slide_status');
    Route::get('api/del_slide/{id}', 'SlideController@del_slide')->name('del_slide');

    Route::resource('admin/service', 'ServiceController');
    Route::post('api/service_status', 'ServiceController@service_status')->name('service_status');
    Route::get('api/del_service/{id}', 'ServiceController@del_service')->name('del_service');

    Route::get('admin/setting', 'SettingController@setting')->name('setting');
    Route::post('api/post_setting', 'SettingController@post_setting')->name('post_setting');

});