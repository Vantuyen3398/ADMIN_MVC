<?php  
	include 'config/config.php';
	
	/**
	 * BackendModel Class
	 */
	class UserModel extends DatabaseConnect
	{
		/**
		 * Insert Users
		 */

		function insert_user($name, $email, $username, $password, $role, $birthday, $avatar){
			$created = date('Y-m-d h:i:s');
			$sql = "INSERT INTO user(name, email, username, password, role, birthday, avatar, created) VALUES ('$name', '$email', '$username', '$password', '$role', '$birthday', '$avatar', '$created')";
			return mysqli_query($this->connect(), $sql);
		}

		/**
		 * Check email_username
		 */

		function check_exist_user($email, $username){
			$sql = "SELECT * FROM user 
					WHERE email = '$email' 
					OR username = '$username' ";
			return mysqli_query($this->connect(), $sql);
		}

		/**
		 * Check Login
		 */

		function checkLogin($username, $password) {
			$sql = "SELECT * FROM user 
					WHERE username = '$username'
					AND password = '$password' ";
			$result = mysqli_query($this->connect(), $sql);
			$role = '';
			while ($row = $result->fetch_assoc()) {
				$role = $row['role'];
			}
			return $role;
		}

		/**
		 * List All User
		 */

		function getAllUser(){
			$sql = "SELECT * FROM user";
			return mysqli_query($this->connect(), $sql);
		}

		/**
		 * List User On Page
		 */

		function pagination($page){
			$index = ($page - 1) * 3;
			$sql = "SELECT * FROM user LIMIT ". $index . ',' . 3;
			return mysqli_query($this->connect(), $sql);
		}

		/**
		 *  Search User
		 */

		function searchUser($key){
			$sql = "SELECT * FROM user WHERE username = '$key' OR email = '$key'";
			return mysqli_query($this->connect(), $sql);
		}

		/**
		 * Delete User
		*/

		function delUser($id){
			$sql = "DELETE FROM user WHERE id = '$id'";
			return mysqli_query($this->connect(), $sql);
		}

		/**
		 * Get User By Id
		*/

		function getUserbyId($id){
			$sql  = "SELECT * FROM user WHERE id = '$id'";
			return mysqli_query($this->connect(), $sql);
		}

		/**
		 * Edit User
		*/

		function EditUser($id, $name, $email, $username, $avatar){
			$updated = date('Y-m-d h:i:s');
			$sql = "UPDATE user SET name = '$name', email = '$email', username = '$username', avatar = '$avatar', updated = '$updated' WHERE id = '$id' ";
			return mysqli_query($this->connect(), $sql);
		}
	}
	/**
	 * Product Class
	 */
	class ProductModel extends DatabaseConnect
	{
		
		/**
		 * Add Category Class
		 */

		function addCate($name){
			$sql = "INSERT INTO category(cate_name) VALUES ('$name')";
			return mysqli_query($this->connect(), $sql);
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
			return mysqli_query($this->connect(), $sql);
		}

		/**
		 * Delete Category Class
		 */

		function delCate($id){
			$sql = "DELETE FROM category WHERE id = '$id'";
			return mysqli_query($this->connect(), $sql);
		}

		/**
		 * Add Product Class
		 */

		function insert_pd($product_name, $cate_id, $price, $image){
			$sql = "INSERT INTO product(product_name, cate_id, price, image) VALUES ('$product_name', '$cate_id', '$price', '$image')";
			return mysqli_query($this->connect(), $sql);
		}

		/**
		 * Get All Product Class
		*/

		function getAllProduct(){
			$sql = "SELECT * FROM product";
			return mysqli_query($this->connect(), $sql);
		}

		/**
		 * Get List Product To Page
		*/

		function pagination($page){
			$index = ($page - 1) * 3;
			$sql = "SELECT product.*, category.cate_name FROM product INNER JOIN category ON category.id = product.cate_id LIMIT ". $index . ',' . 3;
			return mysqli_query($this->connect(), $sql);
		}

		/**
		 * Delete Product 
		*/

		function delProduct($id){
			$sql ="DELETE FROM product WHERE id = '$id'";
			return mysqli_query($this->connect(), $sql);
		}

		/**
		 * Get Product By Id
		*/

		function getProductById($id){
			$sql = "SELECT * FROM product WHERE id = '$id'";
			return mysqli_query($this->connect(), $sql);
		}

		/**
		 * Get Category By Id
		*/

		function getCateById($category_id = null) {
			$sql = "SELECT * FROM category";
			$select = '';
			$result = mysqli_query($this->connect(), $sql);
			while ($row = $result->fetch_assoc()) {
				$id = $row['id'];
				$name = $row['cate_name'];
				$selected = ($id == $category_id)?'selected':'';
				$select.="<option value='$id' $selected>$name</option>";
			}
			return $select;
		}

		function EditProduct($id, $name, $price, $image, $category_id){
			$sql = "UPDATE product SET product_name = '$name', cate_id = $category_id, price = '$price', image = '$image' WHERE id = $id";
			return mysqli_query($this->connect(), $sql);
		}
	}
?>