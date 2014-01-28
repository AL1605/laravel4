<?php
class TestValidationController extends BaseController{
	
	//Test Validation
	public function basicValidate(){
		$model = new Book;
		$errors = '';
		$rules = array('name' => 'required', 'price' => 'required');
		
		if(Input::all()){
			$validate = Validator::make(Input::all(), $rules);
			
			if($validate->fails()){
				$errors = $validate->messages();
				
				return Redirect::to('basicValidate')
					   ->withErrors($errors)
					   ->withInput();			
			}
			else{
				$model->name = Input::get('name');
				$model->price = Input::get('price');
				
				if($model->save()){
					return "Save Success";
				}
			}
		}
		
		return View::make('test_validation.basicValidate');
	}
}
?>