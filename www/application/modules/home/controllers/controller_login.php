<?php

class Controller_Login extends Controller
{
	
	function action_index()
	{
        if (isset($_POST['email'])) {
            $email = $_POST['email'];
            if ($email == '') {
                unset($email);
            }
        }
        if (isset($_POST['password'])) {
            $password = $_POST['password'];
            if ($password == '') {
                unset($password);
            }
        }
        if (empty($email) or empty($password)) {
            $data["login_status"] = "";
        }
        $email = stripslashes($email);
        $email = htmlspecialchars($email);
        $password = stripslashes($password);
        $password = htmlspecialchars($password);
        $email = trim($email);
        $password = trim($password);
        $result = mysql_query("SELECT id FROM user WHERE email = '$email'", $db);
        $myrow = mysql_fetch_array($result);
        echo mysql_error();

        if (empty($myrow['password'])) {
            $data["login_status"] = "";
        }
        else {
            if ($myrow['password'] == $password) {
                $_SESSION['email'] = $myrow['email'];
                $_SESSION['id'] = $myrow['id'];
                echo $data["login_status"] = "access_denied";
            }
            else {
                $data["login_status"] = "";
            }
        }
		
		$this->view->generate('login_view.php', 'template_view.php', $data);
	}
	
}
