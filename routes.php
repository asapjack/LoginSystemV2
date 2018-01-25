<?php
  function call($controller, $action) {
    require_once('controllers/' . $controller . '_controller.php');

    switch($controller) {
      case 'pages':
        $controller = new PagesController();
        break;
      case 'registration':
        require_once('models/register.php');
        $controller = new RegistrationController();
        break;
      case 'login':
        $controller = new LoginController();
        require_once('models/login.php');
        break;
      }
    $controller->{ $action }();
  }

  // we're adding an entry for the new controller and its actions
  $controllers = array('pages' => ['home', 'error'],
                       'registration' => ['register', 'complete'],
                       'login' => ['login', 'logout']);

  if (array_key_exists($controller, $controllers)) {
    if (in_array($action, $controllers[$controller])) {
      call($controller, $action);
    } else {
      call('pages', 'error');
    }
  } else {
    call('pages', 'error');
  }
?>
