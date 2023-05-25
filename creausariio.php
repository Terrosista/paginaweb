<?php
include("base.php");

$username =$_POST["text"];
$email = $_POST["mail"];
$password = $_POST["password"];

$pass = password_hash($password, PASSWORD_BCRYPT);

$cosultaId =" SELECT usario 
 FROM dato 
 WHERE usario= '$username' ";
 
 $cosultaId = mysqli_query($conn,$cosultaId);
 $cosultaId = mysqli_fetch_array($cosultaId);

if($cosultaId){

    
    $sql = "INSERT INTO dato VALUES  ('$username','$email','$password')";
    if(mysqli_query($conn,$sql)){
        echo "Datos insertados correctamente.";


    } else {
        echo "Error al insertar datos: " .mysqli_error($conn);
    }
}else {
     echo "  ya exite el usario";
    echo "<a href=pruba.html > Intetalo de nuevo <\a> <\div>";
   }


 mysqli_close($conn)

?>