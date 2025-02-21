<?php
require_once('controllers/main/base_controller.php');
require_once('models/user.php');

class RegisterController extends BaseController
{
	function __construct()
	{
		$this->folder = 'register';
	}

	public function index()
	{
		$this->render('index');
	} 

	public function submit()
{
	$requiredFields = ['fname', 'lname', 'birthday', 'gender', 'phone', 'username', 'pass'];

	foreach ($requiredFields as $field) {
		if (empty($_POST[$field])) {
			$error = "Vui lòng điền đầy đủ thông tin.";
			$data = array('error' => $error);
			ob_start(); // Start output buffering
			$this->render('index', $data);
			ob_end_flush(); // Flush output buffer and turn off output buffering
			exit();
		}
	}

	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$birthday = $_POST['birthday'];
	$gender = isset($_POST['gender']) ? $_POST['gender'] : null;
	$phone = $_POST['phone'];
	$username = $_POST['username'];
	$password = $_POST['pass'];

	if (User::validateRegister($username)) {
		User::insert($username, 'public/img/user/default.png', $fname, $lname, $gender, $birthday, $phone, $password);

		header('Location: index.php?page=main&controller=login&action=index');
		exit();
	}
	
	$error = "Username đã tồn tại";
	$data = array('error' => $error);
	ob_start(); // Start output buffering
	$this->render('index', $data);
	ob_end_flush(); // Flush output buffer and turn off output buffering
	header('Location: index.php?page=main&controller=register&action=index');
	exit();
}


	public function editInfo()
	{
		session_start();
		$username = $_SESSION['guest'];
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$gender = $_POST['gender'];
		$birthday = $_POST['birthday'];
		$phone = $_POST['phone'];
		$urlcurrent = $_POST['img'];
		// Photo
		$target_dir = "public/img/user/";
		$path = $_FILES['fileToUpload']['name'];
		$ext = pathinfo($path, PATHINFO_EXTENSION);
		$id = (string)date("Y_m_d_h_i_sa");
		$fileuploadname = (string)$id;
		$fileuploadname .= ".";
		$fileuploadname .= $ext;
		$target_file = $target_dir . basename($fileuploadname);
		if (file_exists($target_file)) {
			echo "Sorry, file already exists.";
		}
		$fileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
		// Allow certain file formats
		if (
			$fileType != "jpg" && $fileType != "png" && $fileType != "jpeg"
			&& $fileType != "gif"
		) {
			echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
			$upload_ok = 0;
		}
		if ($_FILES["fileToUpload"]["size"] > 500000) {
			echo "Sorry, your file is too large.";
		}
		$file_pointer = $urlcurrent;
		unlink($file_pointer);
		move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
		// Update
		$change_info = User::update($username, $target_file, $fname, $lname, $gender, $birthday, $phone);
		header('Location: index.php?page=main&controller=layouts&action=index');
	}

	public function editPass()
	{
		$username = $_POST['username'];
		$newpassword = $_POST['new-password'];
		echo $username . " " . $newpassword .  "\n";
		$change_pass = User::changePassword_($username, $newpassword);
		echo "change_pass";
		header('Location: index.php?page=admin&controller=user&action=index');
	}

	public function delete()
	{
		$username = $_POST['username'];
		$urlcurrent = $_POST['img'];
		unlink($urlcurrent);
		$delete_user = User::delete($username);
		header('Location: index.php?page=admin&controller=user&action=index');
	}
}