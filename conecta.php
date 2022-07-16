<?php
$conecta= new mysqli('localhost','root','','logos_escola');
if(!$conecta) {
   die("não foi possével conectar!!!!!".mysqli_error()."<br>");
}

?>