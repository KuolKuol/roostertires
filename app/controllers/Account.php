<?php
class Account extends Controller{
	
	protected function login(){
		$viewmodel = new AccountModel();
		$this->returnView($viewmodel->login(), true);
    }

	protected function register(){
		$viewmodel = new AccountModel();

		$this->returnView($viewmodel->register(), true);
	}

	protected function Index(){
		$viewmodel = new AccountModel();
		$this->returnView($viewmodel->Index(), true);
	}

	protected function posts($id){
		if(!isset($_SESSION['is_logged_in'])){
			header('Location: '.ROOT_URL);
		}
		$viewmodel = new AccountModel();
		$this->returnView($viewmodel->posts($id), true);
	}

	protected function editPost($id){
		if(!isset($_SESSION['is_logged_in'])){
			header('Location: '.ROOT_URL);
		}
		$viewmodel = new AccountModel();
		$this->returnView($viewmodel->editPost($id), true);
	}

	
	protected function deletePost($id){
		if(!isset($_SESSION['is_logged_in'])){
			header('Location: '.ROOT_URL);
		}
		$viewmodel = new AccountModel();
		$this->returnView($viewmodel->deletePost($id), true);
	}

	protected function logout(){
		unset($_SESSION['is_logged_in']);
		unset($_SESSION['user_data']);
		session_destroy();
		header("Location: ".ROOT_URL);
	}
    
}