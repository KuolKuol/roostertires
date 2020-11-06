<?php

class SponsorshipModel extends Model{

    public function roosters(){
		$this->query('SELECT * FROM sponsored_riders');
		$rows = $this->resultSet();
		return($rows);
	}

}