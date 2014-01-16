<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

//Test laravel PHP Framework
Route::get('/hello', function(){
	return  '<h1>Hello World</h1>';
});


/*
Routing คือ การระบุ url ที่เราต้องการจะแสดงการทำงานของตัวโปรแกรมของเรา เช่น ถ้าเราพิมพ์ /hello
เราต้องการแสดงคำว่า hello หรือ /register คือ แสดงหน้า แบบฟอร์มการสมัครสมาชิก
*/

/*
Basic Routing 
*/

/*
แบบ GET คือการส่งข้อมูลผ่านทาง url โดยตรง 
*/

//แบบ GET
Route::get('/testGet', function(){
	return 'Test Get Route. !';
});

/*
แบบ POST คือการส่งข้อมูลผ่านทาง submit จาก form ไม่สามารถพิมพ์ตรงๆ บน url จึงต้องอาศัย
แบบ GET ได้การเรียก form มาก่อนแล้วให้ form ส่งค่าแบบ post ไปอีกที
*/

//แบบ POST
Route::post('testPost', function(){
	return 'Test Post Route. !';
});
Route::get('loadForm', function(){
	return View::make('testForm');
});

/*
แบบ Any คือ ได้ทั้งแบบ Get และ Post
*/

//แบบ Any
Route::any('anyRoute', function(){
	return 'For Any Route. !';
});


/*
Route Parameter คือ เป็นการระบุตัวแปรไปตาม url หรือส่งตัวแปรไปแสดงผลข้อมูลหรือนำไปใช้ต่อ โดยมีทั้งหมด 5 แบบ  
*/

//แบบ ปกติ
Route::get('myId/{id}', function($id){
	return 'Id = '.$id;
});

//แบบ มี parameter default null หรือยอมให้ปล่อยเป็นค่าว่างได้
Route::get('myName/{name?}', function($name=null){
	return 'name = '.$name;
});

//แบบ ระบุข้อมูลให้ parameter default หรือ เมื่อไม่กรอกอะไรก็ให้แสดงค่านี้
Route::get('MyName/{name?}', function($name='Noppadol'){
	return 'name = '.$name;
});

//แบบ ใช้งาน regular expression
Route::get('MYname/{name}', function($name){
	return 'name = '.$name.' from regular expression route.';
})->where('name', '[A-Za-z]+');
Route::get('MYid/{id}', function($id){
	return 'name = '.$id.' from regular expression route.';
})->where('id', '[0-9]+');

//แบบ ใช้งาน regular expression แบบ array
Route::get('Myid-name/{id}/{name}', function($id, $name){
	return 'id = '.$id.' and name = '.$name.' use array regex.';
})->where(array('id'=>'[0-9]+', 'name'=>'[A-Za-z]+'));


/*
Route Prefixing 
*/

//Route Prefixing คือ เป็นการกำหนดคำนำหน้าให้กับ url
Route::group(array('prefix' => 'admin'), function(){
	Route::get('user', function(){
		return 'From admin/user';
	});
});


/*
View คือ ทุกสิ่งที่มองเห็นบนหน้าจอของผู้ใช้ คือโค้ดในส่วนของ view หรือจะเรียกง่ายๆ คือส่วนที่ใช้แสดงผลลัพธ์ของการทำงานของระบบ
*/
Route::get('testView', Function(){
	return 'test view';
});

//Test View
Route::get('testView2', function(){
	return View::make('testView');
});
/*
return View::make(String fileName) คือ การเชื่อมโยง url จาก Route ไปผูกใส่ไฟล์ที่เป็น View เพื่อให้เราจัดการ
รูปแบบการแสดงผลด้วย HTML, CSS ได้ตามต้องการ 
*/

//การส่งตัวแปรไปที่ View ด้วยการส่ง Parameter
Route::get('passVar', function(){
	return View::make('passVar', array('name'=>'Noppadol'));
});
/*
การใช้ View::make(String fileName, array) ค่าของ array คือตัวแปรต่างๆ ที่จะส่งให้ View 
*/ 

//การส่งตัวแปรไปที่ View ด้วยการส่ง Method
Route::get('passVarByMethod', function(){
	return View::make('passVarByMethod')->with('name', 'Nunim');
});


/*
Controller คือ เป็นส่วนที่มีหน้าที่ควบคุมการทำงานของระบบ หรือเป็นเหนือมตัวกลางในการเชื่อม model และ view 
*/

//Test Controller
Route::get('/exam/index', 'ExamController@index');
/*
 ** ตรงคำว่า 'ExamController@index' คือ
 		* ExamController = ชื่อของ Controller
 		* @index = ชื่อของ method ที่เราสร้างมา 
*/

//ใช้ Controller เรียก View แสดงผล
Route::get('/exam/myView', 'ExamController@myView');

//ใช้ Controller เรียก View แบบมีตัวแปรไปแสดงผลด้วย
Route::get('/exam/showVar', 'ExamController@showVar');

//ใช้ Controller เรียก View แบบมีตัวแปรไปแสดงผล แบบ Method
Route::get('/exam/showVarWithMethod', 'ExamController@showVarWithMethod');

//การใช้งาน Redirect to
Route::get('goToDisplay', 'ExamRedirectController@goToDisplay');
Route::get('display', 'ExamRedirectController@display');

//การใช้งาน Redirect to แบบมี Flash Messge
Route::get('setText', 'ExamRedirectController@setText');
Route::get('getText', 'ExamRedirectController@getText');


/*
การดักจับ กรณีไม่มี Method ที่เรียกใช้ (เทคนิคดัก "เกรียน")
*/
Route::get('Okay', 'HomeController@okay');
