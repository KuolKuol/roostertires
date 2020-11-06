<?php
class Application extends Controller{
	protected function Index(){
		$viewmodel = new ApplicationModel();
		$this->returnView($viewmodel->application(), true);
	}
}