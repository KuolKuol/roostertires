<?php
class PostModel extends Model{
	public function Index(){
		$this->query('SELECT * FROM posts INNER JOIN users ON posts.user_id = users.id ORDER BY posts.create_date DESC');
		$rows = $this->resultSet();
		return($rows);
	}

	public function show($id){
		$this->query('SELECT * FROM posts INNER JOIN users ON posts.user_id = users.id WHERE posts.id = :id');
		$this->bind(':id',$id);
		$rows = $this->resultSet();
		if(empty($rows)){
			header('Location: '.ROOT_URL.'pagenotfound');
		} else {
			return($rows);
		}
	}

	public function create(){
		// echo $_SESSION['is_logged_in'];
		// print_r($_SESSION['user_data']);
		// sanatize POST array
		$post = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);

		if(isset($_POST['submit'])){
			// print_r($post);
			//insert 
			$this->query("INSERT INTO posts (title,body,link,user_id) VALUES (:title,:body,:link,:user_id)");
			$this->bind(':title',$post['title']);
			$this->bind(':body',$post['body']);
			$this->bind(':link',$post['link']);
			$this->bind(':user_id',$_SESSION['user_data']['id']);
			$this->execute();
			// verify
			if($this->lastInsertId()){
				// redirect
				header('Location: '.ROOT_URL.'posts');
			}

		}
		return;	
	}
}