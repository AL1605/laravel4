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
	
	//การใช้งาน input only
	public function inputOnly(){
		$input = Input::only('name');
		
		return View::make('exam_input.inputOnly')->with('input', $input);
	}
	
	//การใช้งาน input except
	public function inputExcept(){
		$input = Input::except('name');
		
		return View::make('exam_input.inputExcept')->with('input', $input);
	}
}
?>