<!DOCTYPE html>
<html>
<head>
	<title>Document</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <form method="POST">
    	<h1>Registro pedidos</h1>
    	<input type="text" name="NombreCom" placeholder="Nombre">
    	<input type="text" name="Pedido" placeholder="Pedido">
    	<input type="text" name="Direccion" placeholder="Direccion">
    	<input type="text" name="Metodo_Pago" placeholder="Metodo de pago">
    	<input type="submit" name="enviar">
    </form>
        <?php 
        include("pedido.php");
        ?>
</body>
</html>