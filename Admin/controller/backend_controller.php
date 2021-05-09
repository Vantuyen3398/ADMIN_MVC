<?php  
	include 'model/backend_model.php';
	/**
	 * BackendController Class
	 */

	class BackendController
	{
		function handleRequest() {
			$action = isset($_GET['action'])?$_GET['action']:'home';
			switch ($action) {
				case 'add_user':
					if(isset($_POST['add_user'])){
						$name = trim($_POST['name']);
						$email = trim($_POST['email']);
						$username = trim($_POST['username']);
						$password = trim(md5($_POST['password']));
						$role = $_POST['role'];
						$birthday = date('Y-m-d', strtotime($_POST['birthday']));
						$avatar = 'default.png';
						$pathUpload = 'uploads/user/';
						if ($_FILES['avatar']['error'] == 0) {
								move_uploaded_file($_FILES['avatar']['tmp_name'], $pathUpload.$_FILES['avatar']['name']);
								$avatar = $_FILES['avatar']['name'];
						}
						if($name=="" || $email=="" || $username=="" || $password=="" ){
							$alert = "Field must be not empty";
						}
						else
						{
							$user = new UserModel();
							$check_exist_user = $user -> check_exist_user($email, $username);
							if($check_exist_user ->num_rows == 0){
								if($user -> insert_user($name, $email, $username, $password, $role, $birthday, $avatar))
								{
									$alert = "Add User Success Fully!";
								}
							}
							else{
								$alert = "Email or Username already exist!";
							}
						}
					}
					include 'view/backend/add_user.php';
					break;
				case 'login':
					//view du lieu
					if (isset($_POST['login'])) {
						$username = trim($_POST['username']);
						$password = trim(md5($_POST['password']));
						$user = new UserModel();
						$checkLogin = $user -> checkLogin($username, $password);
						if($checkLogin != false) {
							$_SESSION['login'] = $username;
							$_SESSION['role']  = $checkLogin;
								header("Location: admin.php");
							} else {
								header("Location: login.php");
							}
					}
					break;
				case 'logout':
					unset($_SESSION['login']);
					header("Location: login.php");
					//view du lieu
					break;
				case 'list_user':
					$user = new UserModel();
					$get_all_user = $user -> getAllUser();

					if(!isset($_GET['page'])){
						$page = 1;
					}
					else{
						$page = $_GET['page'];
						$get_user = $user -> pagination($page);
					}
					
					if(isset($_GET['id'])){
						$id = $_GET['id'];
						$del_user = $user -> delUser($id);
						header("Location:admin.php?action=list_user&page=$page");
						$alert = "User Deleted SuccessFully";
					}
					include 'view/backend/list_user.php';
					break;
				case 'edit_user':
				// Lay duoc ID cua user can EDIT
					$id = $_GET['id'];
					$user = new UserModel();
				// Lay tat ca thong tin cua user can EDIT ra theo ID
					$userEdit = $user -> getUserById($id);
					while($row = $userEdit -> fetch_assoc()){
						$nameEdit = $row['name'];
						$emailEdit = $row['email'];
						$usernameEdit = $row['username'];
						$avatarEdit = $row['avatar'];
					}
				// Kiem tra da submit de EDIT user chua?
					if(isset($_POST['edit_user'])){
				// Lay duoc thong tin submit len!
						$name = $_POST['name'];
						$email = $_POST['email'];
						$username = $_POST['username'];
					// Lay anh cu de luu
						// $avatarName = $avatarEdit;
						// //upload avatar
						// if(!$_FILES['avatar']['error']){
						// 	$avatar = $_FILES['avatar'];
						// 	$path = 'uploads/user/';
						// 	$avatarName = uniqid().$avatar['name'];
						// 	move_uploaded_file($avatar['tmp_name'], $path.$avatarName);
						// 	//delete old image
						// 	unlink('uploads/user/'.$avatarEdit);
						// }

						//end upload avatar
						$user = new userModel();
						$user -> EditUser($id, $name, $email, $username);
						header("Location: admin.php?action=list_user&page=1");
					}
					include 'view/backend/edit_user.php';
					break;

				//Case: action = Product!
				case 'add_cate':
					if(isset($_POST['add_cate'])){
						$cate_name = $_POST['name'];
						if(empty($cate_name)){
							$alert = "Category Name must not be empty.";
						}
						else{

							$pd = new ProductModel();
							$checkCate = $pd -> checkCate($cate_name);
							if($checkCate ->num_rows == 0){
								if($pd -> addCate($cate_name))
								{
									$alert = "Add Category SuccessFully!";
								}
							}
							else{
								$alert = "Category Name already exist!";
							}
						}
					}
					include "view/backend/add_cate.php";
					break;
				case 'list_cate':
					$pd = new ProductModel();
					$get_all_cate = $pd -> getListCate();
					if(isset($_GET['id'])){
						$id = $_GET['id'];
						$delCate = $pd -> delCate($id);
						header("Location:admin.php?action=list_cate");
					}
					include "view/backend/list_cate.php";
					break;
				case 'add_product':
					$pd = new ProductModel();
					$get_all_cate = $pd -> getListCate();
					if(isset($_POST['add_product'])){
						$product_name = $_POST['name'];
						$cate_id = $_POST['cate_id'];
						$price = $_POST['price'];
						$image = 'default.png';
						$pathUpload = 'uploads/product/';
						if ($_FILES['image']['error'] == 0) {
							move_uploaded_file(
								$_FILES['image']['tmp_name'], 
								$pathUpload.$_FILES['image']['name']);
							$image = $_FILES['image']['name'];
						}
						if(!empty($product_name && $price && $image))
						{
							$add_product = $pd->insert_pd($product_name, $cate_id, $price, $image);
							$alert = "Add Product SuccessFully!";
						}
						else{
							
							$alert = "Field must be no empty!";
						}
					}

					include 'view/backend/add_product.php';
					break;
				case 'list_product':
					$pd = new ProductModel();
					$get_all_product = $pd -> getAllProduct();

					if(!isset($_GET['page'])){
						$page = 1;
					}
					else{
						$page = $_GET['page'];
						$list_product = $pd -> pagination($page);
					}

					//del product id
					if(isset($_GET['id'])){
						$id = $_GET['id'];
						$del_product = $pd -> delProduct($id);
					}
					include "view/backend/list_product.php";
					break;
				case 'edit_product':
					

					// Lay duoc ID cua san pham can EDIT
					$id = $_GET['id'];

					// Lay tat ca thong tin cua san pham can EDIT ra theo ID
					$pd = new ProductModel();
					$productEdit = $pd->getProductById($id);
					while ($row = $productEdit->fetch_assoc()) {
						$nameEdit            = $row['product_name'];
						$priceEdit           = $row['price'];
						$imageEdit           = $row['image'];
						$category_id = $row['cate_id'];
					}
					// Lay danh muc san pham ra
					$pd = new ProductModel();
					$get_cate_id = $pd -> getCateById($category_id);
					// ket thuc viec lay thong tin theo ID


					// Kiem tra da submit de EDIT san pham chua?
					if(isset($_POST['edit_product'])) {
						// Lay duoc thong tin submit len!
						$name      = $_POST['name'];
						$price     = $_POST['price'];
						$category_id     = $_POST['product_category_id'];
						// Truoc mat, lay anh cu de luu
						$imageName = $imageEdit;
						//upload image
						if(!$_FILES['image']['error']){
							$image = $_FILES['image'];
							$path = 'uploads/product/';
							$imageName = uniqid().$image['name'];
							move_uploaded_file($image['tmp_name'], $path.$imageName);
							//delete old image
							unlink('uploads/product/'.$imageEdit);
						}
						//end upload image
						$pd = new ProductModel();
						$pd->EditProduct($id, $name, $price, $imageName, $category_id);
						header("Location: admin.php?action=list_product&page=1");
					}
					include 'view/backend/edit_product.php';
					break;
				default:
					if(!isset($_SESSION['login'])){
						header("Location: login.php");
					}
					break;
			}
		}
	}
?>