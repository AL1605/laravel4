<?php
	class ExamModelController extends BaseController{
		
		//Test Create
		public function create(){
			$model = new Book;
			
			$categoryOption = Category::lists('name', 'id');
			
			if(Input::all()){
				$model->category_id = Input::get('category_id');
				$model->name = Input::get('name');
				$model->price = Input::get('price');
				$model->create = date('Y-m-d H:i:s');
				
				if($model->save()){
					return "Save Success.";
				}
			}
			
			return View::make('exam_model.create')->with('model', $model)->with('categoryOption', $categoryOption);
		}
	}
?>