<?php

  session_start();
  session_destroy();

  echo "<script>alert('Você saiu!'); document.location.href='login.php';</script>";

?>
