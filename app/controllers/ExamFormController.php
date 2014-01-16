<?php
class ExamFormController extends BaseController{
	
	//การใช้งาน Form
	public function myForm(){
		return View::make('exam_form.myForm');
	}
}
?>