<?php
class ExamSessionController extends BaseController{
	
	//Test Session put
	public function sessionPut(){
		Session::put('myName', 'Noppadol');
		
		return View::make('exam_session.sessionPut');
	}
	
	//Test Session push
	public function sessionPush(){
		Session::push('myTime', date('H:i:s'));
		
		return View::make('exam_session.sessionPush');
	}
	
	//Test Session all
	public function sessionAll(){
		return View::make('exam_session.sessionAll');
	}
	
	//Test Session forget
	public function sessionForget(){
		Session::forget('myName');
		
		return View::make('exam_session.sessionForget');
	}
	
	//Test Session flush
	public function sessionFlush(){
		Session::flush();
		
		return View::make('exam_session.sessionFlush');
	}
}
?>