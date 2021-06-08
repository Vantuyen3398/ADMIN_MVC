<?php  
	// include 'config/config.php';
	/**
	 * Product Class
	 */
	class ProductModel 
	{
		public $conn;
		function __construct() 
		{
			$connect = new ConnectDB();
			$this->conn = $connect->connectDatabase();
		}

		/**
		 * Add Category Class
		 * @param string $name
		*/

		function addCate($name)
		{
			$sql = "INSERT INTO category(cate_name) VALUES ('$name')";
			return mysqli_query($this->conn, $sql);
		}

		/**
		 * Check Exist Category Class
		 * @param string $name
		*/

		function checkCate($name) 
		{
			$sql = "SELECT * FROM category 
					WHERE cate_name = '$name' ";
			return mysqli_query($this->conn, $sql);
		}

		/**
		 * Get List Category Class
		*/

		function getListCate()
		{
			$sql = "SELECT * FROM category";
			return mysqli_query($this->conn, $sql);
		}

		/**
		 * Delete Category Class
		 * @param int $id
		*/

		function delCate($id)
		{
			$sql = "DELETE FROM category WHERE id = '$id'";
			return mysqli_query($this->conn, $sql);
		}

		/**
		 * Add Product Class
		 * @param string $product_name
		 * @param float $price
		 * @param int $cate_id
		 * @param string $image
		*/

		function addProduct($product_name, $price, $cate_id, $image)
		{
			$sql = "INSERT INTO product(product_name, cate_id, price, image) VALUES ('$product_name', '$cate_id', '$price', '$image')";
			return mysqli_query($this->conn, $sql);
		}

		/**
		 * Get All Product Class
		*/

		function getAllProduct()
		{
			$sql = "SELECT * FROM product";
			return mysqli_query($this->conn, $sql);
		}

		/**
		 * Get List Product To Page
		 * @param int $page
		*/

		function getPagination($page)
		{
			$index = ($page - 1) * 3;
			$sql = "SELECT product.*, category.cate_name FROM product INNER JOIN category ON category.id = product.cate_id LIMIT ". $index . ',' . 3;
			return mysqli_query($this->conn, $sql);
		}

		/**
		 * Delete Product 
		 * @param int $id
		*/

		function delProduct($id)
		{
			$sql ="DELETE FROM product WHERE id = '$id'";
			return mysqli_query($this->conn, $sql);
		}

		/**
		 * Get Product By Id
		 * @param int $id
		*/

		function getProductById($id)
		{
			$sql = "SELECT * FROM product WHERE id = '$id'";
			return mysqli_query($this->conn, $sql);
		}

		/**
		 * Get Category By Id
		 * @param int $cate_id = null
		*/

		function getCateById($cate_id = null) 
		{
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

		/**
		 * Get Edit Product By Id
		 * @param int $id
		 * @param string $name
		 * @param float $price
		 * @param string $image
		 * @param int $category_id
		*/

		function EditProduct($id, $name, $price, $image, $category_id)
		{
			$sql = "UPDATE product SET product_name = '$name', cate_id = $category_id, price = '$price', image = '$image' WHERE id = $id";
			return mysqli_query($this->conn, $sql);
		}
	}
?>