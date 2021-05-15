<?php  
	// include 'config/config.php';
	
	/**
	 * BackendModel Class
	 */
	class UserModel 
	{
		public $conn;
		function __construct() {
			$connect = new ConnectDB();
			$this->conn = $connect->connect();
		}
		/**
		 * Insert Users
		 */

		function insert_user($name, $email, $username, $password, $role, $birthday, $avatar){
			$created = date('Y-m-d h:i:s');
			$sql = "INSERT INTO user(name, email, username, password, role, birthday, avatar, created) VALUES ('$name', '$email', '$username', '$password', '$role', '$birthday', '$avatar', '$created')";
			return mysqli_query($this->conn, $sql);
		}

		/**
		 * Check email_username
		 */

		function check_exist_user($email, $username){
			$sql = "SELECT * FROM user 
					WHERE email = '$email' 
					OR username = '$username' ";
			return mysqli_query($this->conn, $sql);
		}

		/**
		 * Check Login
		 */

		function checkLogin($username, $password) {
			$sql = "SELECT * FROM user 
					WHERE username = '$username'
					AND password = '$password' ";
			$result = mysqli_query($this->conn, $sql);
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
			return mysqli_query($this->conn, $sql);
		}

		/**
		 * List User On Page
		 */

		function pagination($page){
			$index = ($page - 1) * 3;
			$sql = "SELECT * FROM user LIMIT ". $index . ',' . 3;
			return mysqli_query($this->conn, $sql);
		}

		/**
		 *  Search User
		 */

		function searchUser($key){
			$sql = "SELECT * FROM user WHERE username = '$key' OR email = '$key'";
			return mysqli_query($this->conn, $sql);
		}

		/**
		 * Delete User
		*/

		function delUser($id){
			$sql = "DELETE FROM user WHERE id = '$id'";
			return mysqli_query($this->conn, $sql);
		}

		/**
		 * Get User By Id
		*/

		function getUserbyId($id){
			$sql  = "SELECT * FROM user WHERE id = '$id'";
			return mysqli_query($this->conn, $sql);
		}

		/**
		 * Edit User
		*/

		function EditUser($id, $name, $email, $username, $avatar){
			$updated = date('Y-m-d h:i:s');
			$sql = "UPDATE user SET name = '$name', email = '$email', username = '$username', avatar = '$avatar', updated = '$updated' WHERE id = '$id' ";
			return mysqli_query($this->conn, $sql);
		}
	}
?>