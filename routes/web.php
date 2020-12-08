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

Route::get('/about_us', function () {
    return view('about_us');
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
Route::get('/หลักทรัพย์', function () {
    return view('page3.page4');
});

//////////////////////////////////////

Route::get('/คลาสสอนการเงินให้เด็กก่อนวัยรุ่น', function () {
    return view('page4.page2');
});
Route::get('/คลาสการเงินสำหรับผู้ใหญ่', function () {
    return view('page4.page3');
});
Route::get('/คำนวณการเงินแบบง่ายๆ', function () {
    return view('page4.page4');
});

Route::get('/บทความการเงิน', function () {
    return view('blog');
});

Route::get('/blog_detail', function () {
    return view('blog_detail');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
