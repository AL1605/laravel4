<?php
class ExamCookieController extends BaseController{
	
	//Test cookie forever
	public function cookieForever(){
		Cookie::forever('myCookie', 'This is cookie.');
		
		return View::make('exam_cookie.cookieForever');
	}
}
?>