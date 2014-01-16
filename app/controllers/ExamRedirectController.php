<?php
class ExamRedirectController extends BaseController{
	
	//การใช้งาน Redirect to
	public function display(){
		return View::make('exam_redirect.display');
	}
	public function goToDisplay(){
		return Redirect::to('display');
	}
	
	//การใช้งาน Redirect to แบบมี Flash Messge
	public function getText(){
		return View::make('exam_redirect.getText');
	}
	public function setText(){
		return Redirect::to('getText')->with('text', 'Text From setText Method.');
	}
}
?>