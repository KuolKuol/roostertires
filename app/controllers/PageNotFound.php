<?php
class PageNotFound extends Controller{
	protected function Index(){
		$this->returnView(NULL, true);
	}
}