<?php 

include("con_db.php");

if (isset($_POST['enviar'])) {
    if (strlen($_POST['NombreCom']) >= 1 && strlen($_POST['Pedido']) >= 1 && strlen($_POST['Direccion']) >= 1 && strlen($_POST['Metodo_Pago']) >= 1) {
	    $NombreCom = trim($_POST['NombreCom']);
	    $Pedido = trim($_POST['Pedido']);
	    $Direccion = trim($_POST['Direccion']);
	    $Metodo_Pago = trim($_POST['Metodo_Pago']);
	    $consulta = "INSERT INTO pedidos(NombreCom, Pedido , Direccion, Metodo_Pago) VALUES ('$NombreCom','$Pedido','$Direccion','$Metodo_Pago')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te has inscrito correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>