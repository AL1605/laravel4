<?php
class Category extends Eloquent{
	
	//Test Model
	public $timestamps = FALSE;
	/*
	 * สร้างขึ้นเพื่อให้พร้อมใช้งานเพื่อจัดการ SELECT, UPDATE, DELETE, INSERT
	*/
	
	//Test HasMany
	public function book(){
		return $this->hasMany('Book');
	}
}
?>