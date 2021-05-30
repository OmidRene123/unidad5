<H1>Calculadora</H1>
<link rel="stylesheet" type="text/css" href="estilo.css">
<form action="cliente.php" method="get">
  Numero 1: <input type="text" name="a"><br>
  Numero 2: <input type="text" name="b"><br>
  Operacion: <select name="action">
    <option value="suma">Sumar</option>
    <option value="multiplicacion">Multiplicar</option>
    <option value="restar">Restar</option>
   <option value="dividir">Dividir</option>
  </select><br><br>
  <input type="submit" value="Calcular">
</form>

<?php
if (isset($_GET["action"]) && $_GET["action"] == "suma")
{
  $calculadora = file_get_contents(
    'http://localhost/unidad5/calculadora2/servicio.php?action=suma&a=' .$_GET["a"].'&b=' . $_GET["b"]);
  $calculadora = json_decode($calculadora, true);
  ?>
    <h1>SUMA</h1> <?php $_GET["action"] ?>
    <table border ="1">
      <tr> <td>Primer numero : </td><td> <?php echo $calculadora["a"] ?></td> </tr>
      <tr> <td>Segundo numero :</td><td> <?php echo $calculadora["b"] ?></td> </tr>
      <tr> <td>Total: </td><td><h3><?php echo $calculadora["total"] ?></h3></td> </tr>
    </table>
  <?php
}

if (isset($_GET["action"]) && $_GET["action"] == "multiplicacion")
{
  $calculadora = file_get_contents(
    'http://localhost/unidad5/calculadora2/servicio.php?action=multiplicacion&a=' .$_GET["a"].'&b=' . $_GET["b"]);
  $calculadora = json_decode($calculadora, true);
  ?>
    <h1>MULTIPLICACION</h1> <?php $_GET["action"] ?>
    <table border ="1">
      <tr> <td>Primer numero : </td><td> <?php echo $calculadora["a"] ?></td> </tr>
      <tr> <td>Segundo numero :</td><td> <?php echo $calculadora["b"] ?></td> </tr>
      <tr> <td>Total: </td><td><h3><?php echo $calculadora["total"] ?></h3> </td>  </tr>
    </table>
  <?php
}

if (isset($_GET["action"]) && $_GET["action"] == "restar")
{
  $calculadora = file_get_contents(
    'http://unidad5/EjemplosServWeb/calculadora2/servicio.php?action=restar&a=' .$_GET["a"].'&b=' . $_GET["b"]);
  $calculadora = json_decode($calculadora, true);

  ?>
    <h1>RESTAR</h1> <?php $_GET["action"] ?>
    <table border ="1">
      <tr> <td>Primer numero : </td><td> <?php echo $calculadora["a"] ?></td> </tr>
      <tr> <td>Segundo numero :</td><td> <?php echo $calculadora["b"] ?></td> </tr>
      <tr>  <td>Total: </td><td><h3><?php echo $calculadora["total"] ?></h3></td> </tr>
    </table>
  <?php
}

if (isset($_GET["action"]) && $_GET["action"] == "dividir")
{
  $calculadora = file_get_contents(
    'http://localhost/unidad5/calculadora2/servicio.php?action=dividir&a=' .$_GET["a"].'&b=' . $_GET["b"]);
  $calculadora = json_decode($calculadora, true);

  ?>
    <h1>DIVIDIR</h1> <?php $_GET["action"] ?>
    <table border ="1">
      <tr> <td>Primer numero : </td><td> <?php echo $calculadora["a"] ?></td> </tr>
      <tr> <td>Segundo numero :</td><td> <?php echo $calculadora["b"] ?></td> </tr>
      <tr>  <td>Total: </td><td><h3><?php echo $calculadora["total"] ?></h3></td> </tr>
    </table>
  <?php
}
?>
