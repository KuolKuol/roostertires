<?php
class Shop extends Controller{
	

	protected function tubes(){
		$viewmodel = new ShopModel();
		$this->returnView($viewmodel->tubes(), true);
	}

	protected function tires($id){
		$viewmodel = new ShopModel();
		$this->returnView($viewmodel->tires($id), true);
	}

	protected function category($id){
		if($id == 'index'){
			header("Location: ". ROOT_URL."pagenotfound");
		}
		$viewmodel = new ShopModel();
		$this->returnView($viewmodel->category($id), true);
	}


	protected function discipline(){
		$this->returnView(NULL, true);
	}

}