<?php
class UserModel extends Model{

	public function Index(){
		if(isset($_SESSION['is_logged_in'])){
			$this->query('SELECT * FROM posts INNER JOIN users ON posts.user_id = users.id AND posts.user_id = :id ORDER BY posts.create_date DESC');
			$this->bind(':id',$_SESSION['user_data']['id']);
			$rows = $this->resultSet();
			return($rows);	
		} else {
			header("Location: ".ROOT_URL);
		}
	}

	

	public function login(){

		if(isset($_POST['submit'])){
			// sanatize POST array
			$post = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);

			$password = md5($post['password']);
			
			//insert 
			$this->query("SELECT * FROM users WHERE username = :username AND password = :password");
			$this->bind(':username',$post['username']);
			$this->bind(':password',$password);
			$row = $this->single();

			if(!empty($row)){
				$_SESSION['is_logged_in'] = true;
				$_SESSION['user_data'] = array(
					"id" => $row['id'],
					"first_name" => $row['first_name'],
					"last_name" => $row['last_name'],
					"email" => $row['email'],
					"username" => $row['username']
				);
				// Message::setMessage('Correct Login','success');
				header('Location: '.ROOT_URL.'users');
			} else {
				Message::setMessage('Incorrect Login','error');
			}

		}
		return;	
	}

	public function register(){
		// sanatize POST array
		
		if(isset($_POST['submit'])){

			$post = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
			$password = md5($post['password']);

			// $password = password_hash($post['password'],PASSWORD_DEFAULT);

			//insert 
			$this->query("INSERT INTO users (first_name,last_name,username,email,password) VALUES (:first_name,:last_name,:username,:email,:password)");
			$this->bind(':first_name',$post['firstName']);
			$this->bind(':last_name',$post['lastName']);
			$this->bind(':email',$post['email']);
			$this->bind(':username',$post['username']);
			$this->bind(':password',$password);
			$this->execute();

			// verify
			if($this->lastInsertId()){
				// redirect
				header('Location: '.ROOT_URL.'users/login');
			}

		}
		return;	
	}

	public function posts($id){
		// echo $id;
		if(isset($_SESSION['is_logged_in'])){
			$user_id = $_SESSION['user_data']['id'];
			$this->query('SELECT * FROM posts WHERE posts.user_id = :user_id');
			// $this->query('SELECT * FROM posts INNER JOIN users ON users.id = posts.user_id WHERE users.id = :user_id ORDER BY posts.create_date DESC');
			$this->bind(':user_id',$user_id);
			$rows = $this->resultSet();
			return($rows);	
		} else {
			header("Location: ".ROOT_URL);
		}
	}

	
	public function deletePost($id){

		$user_id = $_SESSION['user_data']['id'];

		// check if user is logged in
		if(isset($_SESSION['is_logged_in'])){

			// Check if user is allowed to delete post 
			$this->query('SELECT * FROM posts WHERE posts.id = :id AND posts.user_id = :user_id');
			$this->bind(':id',$id);
			$this->bind(':user_id',$user_id);
			$auth = $this->resultSet();

			// delete post if user wrote post
			if(!empty($auth)){
				$this->query('DELETE FROM posts WHERE posts.id = :id');
				$this->bind(':id',$id);
				$this->execute();
				header("Location: ".ROOT_URL.'users/posts');
			} else {
				// redirect user if he/she is not logged in
				header("Location: ".ROOT_URL);
			}

		} else {
			// redirect user if he/she is not logged in
			header("Location: ".ROOT_URL);
		}
	}

	public function editPost($id){


		if(isset($_SESSION['is_logged_in'])){
			$user_id = $_SESSION['user_data']['id'];
			if($id == 'index'){
				// redirect to homepage if there is no third parameter
				header("Location: ".ROOT_URL."pagenotfound");
			} else {
				// ALlow only original blog authors to view and update blog posts
				$this->query('SELECT * FROM posts WHERE posts.id = :id AND posts.user_id = :user_id');
				$this->bind(':id',$id);
				$this->bind(':user_id',$user_id);
				$rows = $this->resultSet();
				// redirect user if they did not write the post
				if(empty($rows)){
					header("Location: ".ROOT_URL."pagenotfound");
				}	
			}

			// populate form with former text
			if(!isset($_POST['submit'])){
				// echo $id;
				$this->query('SELECT * FROM posts WHERE posts.id = :id');
				$this->bind(':id',$id);
				$rows = $this->resultSet();
				
				if(empty($rows)){
					// send user to 404 page if invalid id is entered
					header("Location: ".ROOT_URL."pagenotfound");
				} else {
					return($rows);	
				}
			} else {
				// echo $id;
				// update fields when form is entered
				$this->query('UPDATE posts SET title = :title ,body = :body, link = :link WHERE posts.id = :id');
				$this->bind(':id',$id);
				$this->bind(':title',$_POST['title']);
				$this->bind(':body',$_POST['body']);
				$this->bind(':link',$_POST['link']);
				$this->execute();
				header("Location: ".ROOT_URL.'users/posts');
			}
	

		} else {
			header("Location: ".ROOT_URL);
		}
	}
	
}