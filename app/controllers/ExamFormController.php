<?php
class ExamFormController extends BaseController{
	
	//การใช้งาน Form
	public function myForm(){
		return View::make('exam_form.myForm');
	}
	
	//Test Label
	public function myLabel(){
		return View::make('exam_form.myLabel');
	}
}
?>