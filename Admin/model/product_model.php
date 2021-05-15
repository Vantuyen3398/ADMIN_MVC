<?php  
	// include 'config/config.php';
	/**
	 * Product Class
	 */
	class ProductModel 
	{
		public $conn;
		function __construct() {
			$connect = new ConnectDB();
			$this->conn = $connect->connect();
		}
		/**
		 * Add Category Class
		 */

		function addCate($name){
			$sql = "INSERT INTO category(cate_name) VALUES ('$name')";
			return mysqli_query($this->conn, $sql);
		}

		/**
		 * Check Exist Category Class
		 */

		function checkCate($name) {
			$sql = "SELECT * FROM category 
					WHERE cate_name = '$name' ";
			return mysqli_query($this->connect(), $sql);
		}

		/**
		 * Get List Category Class
		 */

		function getListCate(){
			$sql = "SELECT * FROM category";
			return mysqli_query($this->conn, $sql);
		}

		/**
		 * Delete Category Class
		 */

		function delCate($id){
			$sql = "DELETE FROM category WHERE id = '$id'";
			return mysqli_query($this->conn, $sql);
		}

		/**
		 * Add Product Class
		 */

		function insert_pd($product_name, $cate_id, $price, $image){
			$sql = "INSERT INTO product(product_name, cate_id, price, image) VALUES ('$product_name', '$cate_id', '$price', '$image')";
			return mysqli_query($this->conn, $sql);
		}

		/**
		 * Get All Product Class
		*/

		function getAllProduct(){
			$sql = "SELECT * FROM product";
			return mysqli_query($this->conn, $sql);
		}

		/**
		 * Get List Product To Page
		*/

		function pagination($page){
			$index = ($page - 1) * 3;
			$sql = "SELECT product.*, category.cate_name FROM product INNER JOIN category ON category.id = product.cate_id LIMIT ". $index . ',' . 3;
			return mysqli_query($this->conn, $sql);
		}

		/**
		 * Delete Product 
		*/

		function delProduct($id){
			$sql ="DELETE FROM product WHERE id = '$id'";
			return mysqli_query($this->conn, $sql);
		}

		/**
		 * Get Product By Id
		*/

		function getProductById($id){
			$sql = "SELECT * FROM product WHERE id = '$id'";
			return mysqli_query($this->conn, $sql);
		}

		/**
		 * Get Category By Id
		*/

		function getCateById($cate_id = null) {
			$sql = "SELECT * FROM category";
			$select = '';
			$result = mysqli_query($this->conn, $sql);
			while ($row = $result->fetch_assoc()) {
				$id = $row['id'];
				$name = $row['cate_name'];
				$selected = ($id == $cate_id)?'selected':'';
				$select.="<option value='$id' $selected>$name</option>";
			}
			return $select;
		}

		function EditProduct($id, $name, $price, $image, $category_id){
			$sql = "UPDATE product SET product_name = '$name', cate_id = $category_id, price = '$price', image = '$image' WHERE id = $id";
			return mysqli_query($this->conn, $sql);
		}

		// function getProductData($_POST){
		// 	$product_name = isset($_POST['name'])?$_POST['name']:" ";
		// 	$price = isset($_POST['price'])?$_POST['price']:"";
		// 	$cate_id = isset($_POST['cate_id'])?$_POST['cate_id']:"";
		// 	return array($product_name, $price, $cate_id);
		// }
	}
?>