<?php 
session_start();

$user = array(
	"nama" => "Fiki Dz",
	"username" => "fikidz",
	"password" => 123
);

if ($user["username"] == $_POST["username"] && $user["password"] == $_POST["password"]) {
	$_SESSION["username"] = $user["username"];
	$_SESSION["user"] = $user;
	header("Location: form.php");
}else {
	header("Location: login.php");
}
?>