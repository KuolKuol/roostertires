<?php
class SponsorshipModel extends Model{

	public function roosters(){
		$this->query('SELECT * FROM posts');
		$rows = $this->resultSet();
		return($rows);
	}

	public function application(){

		if(isset($_POST['submit'])){
            // sanatize POST array
		    $post = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);

			//insert 
			$this->query("INSERT INTO posts (title,body,link,user_id) VALUES (:title,:body,:link,:user_id)");
			$this->bind(':title',$post['title']);
			$this->bind(':body',$post['body']);
			$this->bind(':link',$post['link']);
			$this->bind(':user_id',$_SESSION['user_data']['id']);
			$this->execute();
            
            // send email after

		}
		return;	
	}
}