<?php
require_once 'autoload.php';
/*Instead of using that:
require_once 'clases/usuario.php';
require_once 'clases/categoria.php';
require_once 'clases/entrada.php';
*/

$usuario = new Usuario();

echo $usuario->nombre;
echo "<br>";
echo $usuario->email;

$categoria = new Categoria();
echo "<br>".$categoria->nombre;
