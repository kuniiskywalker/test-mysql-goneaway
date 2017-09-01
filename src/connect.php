<?php
define('WAIT_TIME', 6);

try {
  $pdo = new PDO('mysql:host=db;dbname=test;charset=utf8','root','pass',
array(PDO::ATTR_EMULATE_PREPARES => false));

  sleep(WAIT_TIME);

  $sql = "SELECT version();";
  $pdo->query($sql);

} catch (PDOException $e) {
  exit($e->getMessage());
}

