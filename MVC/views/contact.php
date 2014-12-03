<!DOCTYPE html>
<html>
<head>
	
	

<link rel="stylesheet" type="text/css" href="./public/style.css">
</head>
<body>
<nav>
	<ul>
		<li><a href="home">Home</a></li>
		<li><a href="contact">Contact</a></li>
		<li><a href="about">About</a></li>
	</ul>
</nav>
<header>
	<h1>This is the Contact page</h1>

</header>
<div>
<h2>MVC</h2>
<p>Para cada problema siempre hay buenas soluciones y para la programación web, la solución más utilizada actualmente para organizar el código es el patrón de diseño MVC. En pocas palabras, el patrón de diseño MVC organiza el código en base a su función. De hecho, este patrón separa el código en tres capas:

La capa del modelo define la lógica de negocio (la base de datos pertenece a esta capa). Como ya sabes, Symfony guarda todas las clases y archivos relacionados con el modelo en el directorio lib/model/.
La vista es lo que utilizan los usuarios para interactuar con la aplicación (los gestores de plantillas pertenecen a esta capa). 
En Symfony la capa de la vista está formada principalmente por plantillas en PHP. Estas plantillas se guardan en varios directorios llamados templates/ repartidos por todo el proyecto, tal y como veremos hoy mismo.
El controlador es un bloque de código que realiza llamadas al modelo para obtener los datos y se los pasa a la vista para que los muestre al usuario. Cuando instalamos Symfony el primer día, explicamos que todas las peticiones se canalizan a través de los controladores frontales (index.php y frontend_dev.php). Estos controladores frontales realmente delegan todo el trabajo en las acciones. Como vimos ayer, las agrupaciones lógicas de acciones se denominan módulos.</p><br></br><br></br>
</div>
<footer class="footer">
  <p><?= $Nom,  $Cognoms,  $Academia?></p>
</footer>
</body>
</html>