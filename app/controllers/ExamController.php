<?php

class ExamController extends BaseController{
		
	//Test Controller
	public function index(){
		return '"index" Method From "ExamController".';
	}
	/*
 		* การสร้าง controller ชื่อ class จะต้องมีคำว่า Controller ต่อท้ายเช่น ExamController
 		* ทุกๆ controller จะต้องทำการ extends มาจาก BaseController
 		* function ข้างในต้องเป็นแบบ public 
	*/

	//ใช้ Controller เรียก View แสดงผล
	public function myView(){
		return View::make('exam.myView');
	}
	/*
	 	* 'exam.myView' คือ 
	 		* exam = ชื่อ folder
	 		* myView = ชื่อไฟล์ 
	*/
}

?>