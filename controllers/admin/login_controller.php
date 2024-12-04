<?php
require_once('controllers/admin/base_controller.php');
require_once('models/admin.php');

class LoginController extends BaseController
{
    function __construct()
    {
        $this->folder = 'login';
    }

    public function index()
    {
        $this->render('index');
    }

    public function check()
    {
        session_start();

        // Maximum number of allowed login attempts
        $max_attempts = 5;

        // Lockout duration in seconds (e.g., 15 minutes)
        $lockout_duration = 60;

        // Initialize session variables if not set
        if (!isset($_SESSION['failed_attempts'])) {
            $_SESSION['failed_attempts'] = 0;
        }
        if (!isset($_SESSION['last_attempt_time'])) {
            $_SESSION['last_attempt_time'] = time();
        }

        // Check if the user is locked out
        if ($_SESSION['failed_attempts'] >= $max_attempts) {
            $time_since_last_attempt = time() - $_SESSION['last_attempt_time'];
            if ($time_since_last_attempt < $lockout_duration) {
                $remaining_lockout_time = $lockout_duration - $time_since_last_attempt;
                $err = "Too many failed login attempts. Please try again after " . $remaining_lockout_time . " seconds.";
                $data = array('err' => $err);
                $this->render('index', $data);
                return;
            } else {
                // Reset failed attempts after lockout duration
                $_SESSION['failed_attempts'] = 0;
            }
        }

        $username = $_POST['username'];
        $password = $_POST['password'];

        $check = Admin::validation($username, $password);
        if ($check == 1) {
            // Reset failed attempts on successful login
            $_SESSION['failed_attempts'] = 0;
            $_SESSION["role"] = Admin::getInit($username);
            if (!isset($_SESSION["user"]))
                $_SESSION["user"] = $username;
            
            header("Location: index.php?page=admin&controller=layouts&action=index");
        } else {
            // Increment failed attempts on unsuccessful login
            $_SESSION['failed_attempts']++;
            $_SESSION['last_attempt_time'] = time();
            $remaining_attempts = $max_attempts - $_SESSION['failed_attempts'];
            $err = "Username or password is incorrect. You have " . $remaining_attempts . " attempts left.";
            $data = array('err' => $err);
            $this->render('index', $data);
        }
    }

    public function logout()
    {
        session_start();
        unset($_SESSION["user"]);
        session_destroy();
        header("Location: index.php?page=admin&controller=login&action=index");
    }
}