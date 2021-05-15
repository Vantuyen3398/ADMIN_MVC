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
			$this->conn = $connect->connectDatabase();
		}

		/**
		 * Insert Users
		 * @param string $name
		 * @param string $email
		 * @param string $username
		 * @param string $password
		 * @param string $role
		 * @param string $birthday
		 * @param string $avatar
		*/

		function addUser($name, $email, $username, $password, $role, $birthday, $avatar){
			$created = date('Y-m-d h:i:s');
			$sql = "INSERT INTO user(name, email, username, password, role, birthday, avatar, created) VALUES ('$name', '$email', '$username', '$password', '$role', '$birthday', '$avatar', '$created')";
			return mysqli_query($this->conn, $sql);
		}

		/**
		 * Check email_username
		 * @param string $email
		 * @param string $username
		*/

		function checkExistUser($email, $username){
			$sql = "SELECT * FROM user 
					WHERE email = '$email' 
					OR username = '$username' ";
			return mysqli_query($this->conn, $sql);
		}

		/**
		 * Check Login
		 * @param string $username
		 * @param string $passsword
		 * @return string $role
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
		 * @param int $page
		*/

		function getPagination($page){
			$index = ($page - 1) * 3;
			$sql = "SELECT * FROM user LIMIT ". $index . ',' . 3;
			return mysqli_query($this->conn, $sql);
		}

		/**
		 * Search User
		 * @param string $key
		*/

		function searchUser($key){
			$sql = "SELECT * FROM user WHERE username = '$key' OR email = '$key'";
			return mysqli_query($this->conn, $sql);
		}

		/**
		 * Delete User
		 * @param int $id
		*/

		function delUser($id){
			$sql = "DELETE FROM user WHERE id = '$id'";
			return mysqli_query($this->conn, $sql);
		}

		/**
		 * Get User By Id
		 * @param int $id
		*/

		function getUserById($id){
			$sql  = "SELECT * FROM user WHERE id = '$id'";
			return mysqli_query($this->conn, $sql);
		}

		/**
		 * Edit User
		 * @param int $id
		 * @param string $name
		 * @param string $email
		 * @param string username
		 * @param string avatar
		*/

		function EditUser($id, $name, $email, $username, $avatar){
			$updated = date('Y-m-d h:i:s');
			$sql = "UPDATE user SET name = '$name', email = '$email', username = '$username', avatar = '$avatar', updated = '$updated' WHERE id = '$id' ";
			return mysqli_query($this->conn, $sql);
		}
	}
?>