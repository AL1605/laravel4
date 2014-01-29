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
	
	//Test Rules
	public function manyRules(){
		$model = new Book;
		$errors = '';
		$reles = array('name' => 'required', 'price' => 'required|numeric|min:2');
		
		if(Input::all()){
			$validate = Validator::make(Input::all(), $reles);
			
			if($validate->fails()){
				$errors = $validate->messages();
				
				return Redirect::to('manyRules')
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
		
		return View::make('test_validation.manyRules');
	}
}
?>