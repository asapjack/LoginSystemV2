
<DOCTYPE html>
<html>
  <head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <header>
      <nav>
  <div class="main-wrapper">
    <ul>
      <li><a href='?controller=pages&action=home'>Home</a>
    </ul>
    <?php
    var_dump($_SESSION["Username"]);
    if (isset($_SESSION["Username"])) {
      echo "<div class='nav-logout'>
        <form action='?controller=login&action=logout' method='post'>
          <button type='submit' name='logout'>Logout</button>
        </form>
      </div>";
    }
  else {
    echo "<div class='nav-login'>
      <form action='?controller=login&action=login' method='post'>
        <input type='text' name='uid' placeholder='Username'>
        <input type='password' name='pwd' placeholder='Password'>
        <button type='submit' name='login'>Login</button>
      </form>
      <a href='?controller=registration&action=register'>Register</a>
    </div>";
   }
   ?>
  </div>
</nav>
    </header>

    <?php require_once('routes.php'); ?>

    <footer>
    </footer>
  <body>
<html>
