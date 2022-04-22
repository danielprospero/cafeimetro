<?php
if (!isset($_SESSION["USUARIO"]) or $_SESSION["USUARIO"]["EMAIL"] == null)
{
	header("Location: login-form.php");
	die();
}	
