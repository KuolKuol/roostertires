<?php
class Shop extends Controller{
	
	protected function Index(){
		$viewmodel = new ShopModel();
		$this->returnView($viewmodel->Index(), true);
	}

	protected function product($id){
		if($id == 'index'){
			header("Location: ". ROOT_URL."pagenotfound");
		}
		$viewmodel = new ShopModel();
		$this->returnView($viewmodel->product($id), true);
	}

	protected function category($id){
		if($id == 'index'){
			header("Location: ". ROOT_URL."pagenotfound");
		}
		$viewmodel = new ShopModel();
		$this->returnView($viewmodel->category($id), true);
	}

}