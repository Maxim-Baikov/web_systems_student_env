<?php

class Controller_Signup extends Controller
{

    function action_index()
    {
        if (isset($_POST['email'])) {
            $login = $_POST['email'];
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
        $result = mysql_query("SELECT id FROM users WHERE email = '$email'", $date);
        $myrow = mysql_fetch_array($result);
        if (!empty($myrow['id'])) {
            $data["login_status"] = "";
        }
        $result2 = mysql_query("INSERT INTO users(email, password) VALUES ('$email', '$password')");
        if ($result2 == 'true') {
            $data["login_status"] = "access_denied";
        } else {
            $data["login_status"] = "";
        }

        $this->view->generate('signup_view.php', 'template_view.php');
    }
}
