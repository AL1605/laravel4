<?php
class MyTemplateController extends BaseController{
	
	//การเรียกใช้ Template
	public function index(){
		return View::make('my_template.index');
	}
	
	//การเรียกใช้ ตัวแปรใน Template
	public function myVar(){
		return View::make('my_template.myVar', array('var'=>'Hello This is my Var.'));
	}
	
	//การใช้เงื่อนไข ใน Template
	public function myCondition(){
		return View::make('my_template.myCondition');
	}
	
	//การใช้ For ใน Template
	public function myLoop(){
		return View::make('my_template.myLoop');
	}
	
	//การใช้ Include ใน Template
	public function myInclude(){
		return View::make('my_template.myInclude');
	}
	
	//การใช้ Comment ใน Template
	public function myComment(){
		return View::make('my_template.myComment');
	}
}
?>