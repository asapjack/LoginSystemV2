<?php
class login {

  public function __construct($uid, $pwd) {
    $uid = $_POST['uid'];
    $pwd = $_POST['password'];
  }

  public static function logout() {
    //unset($_SESSION["Username"]);
        $_SESSION["Username"] = Null;
      require_once('views/layout.php');
  }


  public static function login($uid, $pwd) {
      try {
    $db  =Db::getInstance();

    $sql = "SELECT UserID, Username, Password FROM User WHERE Username = '$uid'";
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':uid', $uid);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    if($user === false) {
              require_once('views/pages/home.php');
              echo 'Not a Familiar Username';
    } else {
      if ($pwd == $user['Password']) {
        $_SESSION["Username"] = $uid;
        $printme = $_SESSION["Username"];
        echo 'Login successful! Welcome ';
        echo $printme;
        require_once('index.php');
      }
      else {
        require_once('views/pages/home.php');
        echo 'Password not a Match';
      }
    }

    }
    catch(PDOException $e)
        {
        echo $sql . "<br>" . $e->getMessage();
        }
}
}
?>
