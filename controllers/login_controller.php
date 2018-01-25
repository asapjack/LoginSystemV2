<?php
  class LoginController {
    public function login() {
      if(isset($_POST['login'])){
          login::login($_POST['uid'], $_POST['pwd']);
        }
        require_once('views/layout.php');
    }

    public function logout() {
    if(isset($_POST['logout'])){
      login::logout();
    }
    require_once('views/layout.php');
    echo 'logout successful';
  }

    public function error() {
      require_once('views/pages/error.php');
    }
  }
?>
