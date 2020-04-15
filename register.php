<?php
include 'cn.php';
//Receive the data and store it in variables
$name = $_POST["name"];
$last_name = $_POST["last_name"];
$mail = $_POST["mail"];
$user = $_POST["user"];
$password = $_POST["password"];
$telephone = $_POST["telephone"];
//Query to insert
$insertar = "INSERT INTO users(name, last_name, mail, user, password, telephone) VALUES ('$name','$last_name', '$mail', '$user', '$password', '$telephone')";

$check_user = mysqli_query($conexion, "SELECT * FROM users WHERE user = '$user'");
if(mysqli_num_rows($check_user) > 0){
	echo '<script>
	alert("The user is already registered");
	window.location="http://localhost/www/tutorialFuncionesForm/validadarForm/"
	</script>';
	exit; // exit.- allows finish finish end of php code
}
$check_mail = mysqli_query($conexion, "SELECT * FROM users WHERE mail = '$mail'");
if(mysqli_num_rows($check_mail) > 0){
	echo '<script>
	alert("The email is already registered");
	window.history.go(-1);
	</script>';
	exit; // exit.- allows finish finish end of php code
}
// Run query
$resultado =  mysqli_query($conexion, $insertar);
if(!$conexion){
	echo 'Failed to connect to the database';
}else{
	echo '<script>
	alert("Connected to the database");
	window.history.go(-1);
	</script>';
}
//Close connection
mysqli_close($conexion);

// echo '<script type="text/javascript">' . "\n";
// echo 'window.location="http://www.mydomain.com";';
// echo '</script>';