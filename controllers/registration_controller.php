
<?php
  class RegistrationController {
    public function register() {
      if (isset($_POST['name'])) {
        register::register($_POST['name'], $_POST['pwd'], $_POST['email'], $_POST['uid'], $_POST['phone']);
      }
      // $name = mysqli_real_escape_string(conn, $_POST['name']);
      // $email = mysqli_real_escape_string(conn, $_POST['email']);
      // $phone = mysqli_real_escape_string(conn, $_POST['phone']);
      // $uid = mysqli_real_escape_string(conn, $_POST['uid']);
      // $pwd = mysqli_real_escape_string(conn, $_POST['pwd']);
      require_once('views/registration/register.php');
    }

    public function error() {
      require_once('views/pages/error.php');
    }
  }
?>
