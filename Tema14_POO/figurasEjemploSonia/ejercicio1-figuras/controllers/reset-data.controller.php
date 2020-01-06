<?php

if (isset($_POST["confirmar"])) {
  session_destroy();
  header("Location: ../index.php");
}