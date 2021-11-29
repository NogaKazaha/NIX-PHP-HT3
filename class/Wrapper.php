<?php

class Wrapper {
  public function start() {
    session_start();
  }

  public function destroy() {
    $params = session_get_cookie_params();
    setcookie(
      session_name(),
      '',
      time() - 42000,
      $params['path'],
      $params['domain'],
      $params['secure'],
      $params['httponly'],
    );
    session_destroy();
  }

  public function getUser() {
    return $_SESSION['username'];
  }

  public function setParams() {
    $_SESSION['valid'] = true;
    $_SESSION['timeout'] = time();
    $_SESSION['username'] = 'NogaKazaha';
  }
}