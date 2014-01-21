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


/*
Template คือ สร้างส่วนที่ควรจะแสดงให้เป็นโครงสร้างหลัก และสิ่งที่จะแสดงต่อมาก็เขียนเฉพาะส่วน 
*/

/*
การสร้าง Template เหมือนกับการสร้าง View แต่ Template นี้จะใช้ในทุกๆ หน้าที่เราเรียกใช้ 
*/

//การเรียกใช้ Template
Route::get('myTemplate', 'MyTemplateController@index');

//การเรียกใช้ ตัวแปรใน Template
Route::get('myVar', 'MyTemplateController@myVar');

//การใช้เงื่อนไข ใน Template
Route::get('myCondition', 'MyTemplateController@myCondition');

//การใช้ For ใน Template
Route::get('myLoop', 'MyTemplateController@myLoop');

//การใช้ Include ใน Template
Route::get('myInclude', 'MyTemplateController@myInclude');

//การใช้ Comment ใน Template
Route::get('myComment', 'MyTemplateController@myComment');


/*
Form class
*/

/*
Form class นี้ชวยให้เราไม่ต้องเขียนโค้ด html แบบเดิม เพื่อให้โค้ดดูเป็นระบบระเบียบและช่วยให้โค้ดสั้นลง
*/

/*
ใช้งาน Form ก็ทำงานงานเหมือนกับ tag form ที่เราใช้กันใน html แต่ต่างกันคือเราจะเรียกใช้ class ของ laravel 
*/

//การใช้งาน Form
Route::get('myForm', 'ExamFormController@myForm');

/*
Label เป็นเหมือนการระบุว่า element นี้มีหน้าที่อะไร ส่วนมากใช้ร่วมกบ text, textarea และตัวอื่นๆ ที่ถูกเก็บข้อมูลจากผู้ใช้ได้
*/

//Test Label
Route::get('myLabel', 'ExamFormController@myLabel');

//Test Textfield
Route::get('myTextfield', 'ExamFormController@myTextfield');

//Test Textarea
Route::get('myTextarea', 'ExamFormController@myTextarea');

//Test Textpassword
Route::get('myPassword', 'ExamFormController@myPassword');

//Test Hiddenfield
Route::get('myHidden', 'ExamFormController@myHidden');

//Test Checkbox
Route::get('myCheckbox', 'ExamFormController@myCheckbox');

//Test Radiobutton
Route::get('myRadio', 'ExamFormController@myRadio');

//Test Filefield
Route::get('myFilefield', 'ExamFormController@myFilefield');

//Test Drop-Down List
Route::get('myDDL', 'ExamFormController@myDDL');

//Test Button
Route::get('myButton', 'ExamFormController@myButton');


/*
Request จะยกตัวอย่างง่ายๆ คือ เมื่อมีการกรอกข้อมูลผ่าน form เข้ามา แล้วกดปุ่ม ยืนยัน หลังจากนั้นคือการส่ง request มาที่ server เป็นต้น
*/

/*
การใช้งาน Request URL เป็นการเรียก url ที่เราพิมพ์เข้ามา
*/
//การใช้งาน Request URL
Route::get('url', 'ExamRequestController@url');

/*
การใช้งาน Request path เป็นการแสดง path ที่เราพิมพ์เข้ามา
*/
//การใช้งาน Request path
Route::get('path', 'ExamRequestController@path');

/*
การใช้งาน Request segment เป็นการดึงข้อมูลจาก url ซึ่งแบ่งเป็นส่วน
*/
//การใช้งาน Request segment
Route::get('segment/p1/p2', 'ExamRequestController@segment');

/*
การใช้งาน Request server ตัวนี้เปรียบเสมือน ตัวแปร $_SERVER ของ PHP วิธีการก็เหมือนกันคือ ระบุ key ลงไป จึงจะแสดงข้อมูลที่ต้องการออกมา
*/
//การใช้งาน Request server
Route::get('server', 'ExamRequestController@server');


/*
การับค่าผ่าน Input เมื่อมีการส่งค่ามาจาก Form เราก็จะทำการเรียกใช้ค่าเหล่านั้น อาจจะเก็บลงฐานข้อมูลหรือนำมาคำนวณ
*/

/*
การใช้งาน input get คือการรับค่ามาแบบระบุชื่อ
*/
//การใช้งาน input get
Route::any('inputGet', 'ExamInputController@inputGet');

/*
การใช้งาน input all คือการรับค่ามาทั้งหมด
*/
//การใช้งาน input all
Route::any('inputAll', 'ExamInputController@inputAll');

/*
การใช้งาน input only เป็นการจำกัดตัวแปรเฉพาะที่กำหนดไว้
*/
//การใช้งาน input only
Route::any('inputOnly', 'ExamInputController@inputOnly');

/*
การใช้งาน input except เป็นการเมินเฉยหรือไม่สนใจตัวแปรที่ระบุ
*/
//การใช้งาน input except
Route::any('inputExcept', 'ExamInputController@inputExcept');


/*
การใช้งาน Session เป็นตัวแปรที่มีหน้าที่ทำงานไปทุกๆ หน้า ตราบใดที่ยังไม่มีการปิด browser ทิ้ง มันยังจะทำงานอยู่
*/

/*
การใช้งาน session put เป็นการกำหนดค่าให้ตัวแปร session 
*/
//Test Session put
Route::get('sessionPut', 'ExamSessionController@sessionPut');

/*
การใช้งาน session push เป็นการกำหนดค่าให้ตัวแปร session ให้เก็บข้อมูลไปเรื่อยๆ แบบ array
*/
//Test Session push
Route::get('sessionPush', 'ExamSessionController@sessionPush');

/*
การใช้งาน session all เป็นการดึงข้อมูลมาทั้งหมด
*/
//Test Session all
Route::get('sessionAll', 'ExamSessionController@sessionAll');

/*
การใช้งาน session forget เป็นการลบข้อมูลตัวแปร session ตาม key
*/
//Test Session forget
Route::get('sessionForget', 'ExamSessionController@sessionForget');

/*
การใช้งาน session flush เป็นการลบข้อมูลตัวแปร session ทั้งหมด
*/
//Test Session flush
Route::get('sessionFlush', 'ExamSessionController@sessionFlush');


/*
Cookie จะต่าง session คือต่อให้ปิด browser ไปก็จะไม่โดนทำลาย และระบุระยะเวลาได้ว่าต้องการให้อยู่นานขนาดไหน
*/

/*
การใช้งาน cookie forever กำหนดค่าลงตัวแปร cookies
*/
//Test cookie forever
Route::get('cookieForever', 'ExamCookieController@cookieForever');


/*
การ Upload อันนี้เป็นขั้นตอนตัวอย่างสำหรับการอัพโหลดไฟล์ 
*/
//Test Upload
Route::any('myUpload', 'ExamUploadController@myUpload');


/*การทำงานร่วมกับฐานข้อมูล*/

/*
Eloquenr ORM คือ เป็นตัวจัดการ ทางฐานข้อมูลโดยจะมีคำสั่งมากมายไม่ว่าจะเพิ่ม ลบ แก้ไข หรือรวมไปถึงโครงสร้างตาราง
โดยที่เราก็ไม่จำเป็นต้องไปดูที่ฐานข้อมูล แต่ดูที่ส่วนนี้ได้ โดยจะเรียกสั้น ๆ ว่า model
*/

/*
การสร้าง Model เบื้องต้น จะมีการกำหนดค่าพื้นฐาน คือ $timestamps = false คือ การไม่ให้มีการระบุการลงเวลาในตารางของเรา
ถ้าไม่ระบุเป็น false ก็ต้ิงสร้าง field มาเพิ่ม 2 field คือ create_at, updated_at 
*/

/*
การสร้าง ความสัมพันธ์ BelongTo สำหรับความสัมพันธ์แบบ belongTo หรือ many to one ยกตัวอย่างเช่น หนังสือทั้ง 2 เล่ม
มีประเภทหรือหมวดเดียวกัน เป็นต้น สรุปคือ หนังสือ PHP อยู่ในหมวดหรือประเภท Web Programming 
*/