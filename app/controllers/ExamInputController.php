<?php
class ExamInputController extends BaseController{
	
	//การใช้งาน input get
	public function inputGet(){
		$name = Input::get('name');
		
		return View::make('exam_input.inputGet')->with('name', $name);
	}
	
	//การใช้งาน input all
	public function inputAll(){
		$input = Input::all();
		
		return View::make('exam_input.inputAll')->with('input', $input);
	}
}
?>