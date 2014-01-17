<?php
class ExamRequestController extends BaseController{
	
	//การใช้งาน Request URL
	public function url(){
		return View::make('exam_request.url');
	}
	
	//การใช้งาน Request path
	public function path(){
		return View::make('exam_request.path');
	}
	
	//การใช้งาน Request segment
	public function segment(){
		return View::make('exam_request.segment');
	}
	
	//การใช้งาน Request server
	public function server(){
		return View::make('exam_request.server');
	}
}
?>