<?php
session_start();
$_SESSION["figures"] = $_POST;
unset($_SESSION["figures"]["confirmar"]);

if (count($_SESSION["figures"]) === 0) {
  header("Location: ../index.php?error=true");
} else {
  header("Location: ../views/figure-form.php");
}

