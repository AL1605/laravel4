<?php
class Book extends Eloquent{
	
	//Test Model
	public $timestamps = FALSE;
	/*
	 * สร้างขึ้นเพื่อให้พร้อมใช้งานเพื่อจัดการ SELECT, UPDATE, DELETE, INSERT
	*/
	
	//Test Model
	public function category(){
		return $this->belongsTo('Category');
	}
}
?>