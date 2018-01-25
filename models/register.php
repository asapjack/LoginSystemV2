<?php
class register {

  public $name;
  public $uid;
  public $phone;
  public $pwd;
  public $email;

  public function __construct($uid, $pwd, $email, $name, $phone) {
    $this->uid = $uid;
    $this->pwd = $pwd;
    $this->email = $email;
    $this->name = $name;
    $this->phone = $phone;
  }

  public static function register($uid, $pwd, $email, $name, $phone) {
      try {
    $db  =Db::getInstance();
    $userData = array($uid, $pwd, $email, $name, $phone);

    $sql = "INSERT INTO User (Username, Password, Email, Name, PhoneNumber) VALUES (?, ?, ?, ?, ?)";
    // use exec() because no results are returned
    $stmt = $db->prepare($sql);
    $stmt->execute($userData);
    $lastID = $db->lastInsertId();
    echo "New record created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
}
}
?>
