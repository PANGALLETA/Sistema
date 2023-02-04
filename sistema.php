<?php 
require_once("Autoload.php");

$objUsuario = new Usuario();

//Insertar Usuario
//$insert = $objUsuario->insertUsuario("Andres", 3136695077, "Andres@gmail.com");
//echo $insert;

//Extrae todo los registros
$users = $objUsuario->getUsuario();
print_r("<pre>");
print_r($users);
print_r("<pre>");

$updateUser = $objUsuario->updateUser(2, "Julian Andres",3225090321, "Julian@gmail.com");
echo $updateUser;

$user = $objUsuario->getUser(2);
print_r("<pre>");
print_r($user);
print_r("<pre>");

$delete = $objUsuario->delUser(2);
echo $delete;

?>