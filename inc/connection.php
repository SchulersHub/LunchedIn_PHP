<?php

try {
  $db = new PDO('mysql:host=localhost;dbname=lunchedin', 'root', '');
  $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
  echo "unable to connect";
  //echo $e->getMessage();
  exit;
}

?>
