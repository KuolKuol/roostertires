<?php
class ShopModel extends Model{

	public function Index(){
		$this->query("SELECT * FROM products LEFT JOIN tire_variants ON products.id = tire_variants.product_id ORDER BY tire_variants.size");
		// $this->bind(':user_id',$user_id);
		$rows = $this->resultSet();
		return($rows);
	}

	public function category($id){
		$this->query('SELECT * FROM posts posts.id = :id');
		$this->bind(':id',$id);
		$rows = $this->resultSet();
		if(empty($rows)){
			header('Location: '.ROOT_URL.'pagenotfound');
		} else {
			return($rows);
		}
	}

	public function product($id){
		$this->query('SELECT * FROM posts INNER JOIN users ON posts.user_id = users.id WHERE posts.id = :id');
		$this->bind(':id',$id);
		$rows = $this->resultSet();
		if(empty($rows)){
			header('Location: '.ROOT_URL.'pagenotfound');
		} else {
			return($rows);
		}
	}

}