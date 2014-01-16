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
	
	//Test Textfield
	public function myTextfield(){
		return View::make('exam_form.myTextfield');
	}
	
	//Test Textarea
	public function myTextarea(){
		return View::make('exam_form.myTextarea');
	}
	
	//Test Textpassword
	public function myPassword(){
		return View::make('exam_form.myPassword');
	}
	
	//Test Hiddenfield
	public function myHidden(){
		return View::make('exam_form.myHidden');
	}
	
	//Test Checkbox
	public function myCheckbox(){
		return View::make('exam_form.myCheckbox');
	}
	
	//Test Radiobutton
	public function myRadio(){
		return View::make('exam_form.myRadio');
	}
	
	//Test Filefield
	public function myFilefield(){
		return View::make('exam_form.myFilefield');
	}
	
	//Test Drop-Down List
	public function myDDL(){
		$options = array(
			'key1' => 'option1',
			'key2' => 'option2',
			'key3' => 'option3'
		);
		return View::make('exam_form.myDDL')->with('options', $options);
	}
	
	//Test Button
	public function myButton(){
		return View::make('exam_form.myButton');
	}
}
?>