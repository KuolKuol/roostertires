<?php
class Sponsorship extends Controller{
	
	protected function Index(){
		$viewmodel = new SponsorshipModel();
		$this->returnView(NULL, true);
	}

	protected function roosters(){
		$viewmodel = new SponsorshipModel();
		$this->returnView($viewmodel->roosters(), true);
	}

	protected function application(){
		$viewmodel = new SponsorshipModel();
		$this->returnView($viewmodel->application(), true);
	}

}