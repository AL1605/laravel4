<?php
class ExamUploadController extends BaseController{
	
	//Test Upload
	public function myUpload(){
		$myImg = '';
		$dest = 'upload/';
		
		if(Input::hasFile('img')){
			$name = 'myPic001';
			
			if(Input::file('img')->move($dest, $name)){
				$myImg = $dest.'/'.$name;
			}
		}
		
		return View::make('exam_upload.myUpload')->with('myImg', $myImg);
	}
}
?>