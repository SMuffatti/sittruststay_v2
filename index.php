<?php

  if(isset($_GET['contact'])) {
    include 'views/contact.php';
  }
   else {
    include 'views/home.php';
  }

?>
