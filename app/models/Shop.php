<?php
class ShopModel extends Model{

	public function Index(){
		$this->query("SELECT title,discipline,size,series,sku,images FROM products LEFT JOIN tire_variants ON products.id = tire_variants.product_id ORDER BY tire_variants.size");
		$rows = $this->resultSet();
		return($rows);
	}

	public function tubes(){
		$this->query("SELECT * FROM products INNER JOIN tube_variants ON products.id = tube_variants.product_id");
		$rows = $this->resultSet();
		return($rows);
	}

	public function category($id){
		$this->query('SELECT * FROM tire_variants INNER JOIN  products ON products.id = tire_variants.product_id WHERE discipline = :id ORDER BY series DESC');
		$this->bind(':id',$id);
		$rows = $this->resultSet();
		if(empty($rows)){
			header('Location: '.ROOT_URL.'pagenotfound');
		} else {
			return($rows);
		}
	}

	public function tires($id){
		
		$this->query('SELECT * FROM products INNER JOIN tire_variants ON products.id = tire_variants.product_id WHERE products.sku = :sku LIMIT 1');
		$this->bind(':sku',$id);
		$rows = $this->resultSet();

		if(empty($rows)){
			header('Location: '.ROOT_URL.'pagenotfound');
		} else {
			return($rows);
		}
	}

}