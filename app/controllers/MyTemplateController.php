<?php
class MyTemplateController extends BaseController{
	
	//การเรียกใช้ Template
	public function index(){
		return View::make('my_template.index');
	}
}
?>