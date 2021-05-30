<?php
$possible_url = array("suma","multiplicacion","restar","dividir");
$value = "An error has occurred";

if (isset($_GET["action"]) && in_array($_GET["action"], $possible_url))
{  switch ($_GET["action"])
    { case "suma":
        $value = suma($_GET["a"],$_GET["b"]);
        break;
      case "multiplicacion":
        $value = multiplicacion($_GET["a"],$_GET["b"]);
        break;
      case "restar":
        $value = restar($_GET["a"],$_GET["b"]);
        break;
      case "dividir":
        $value = dividir($_GET["a"],$_GET["b"]);
        break;
    }
}

function suma($a,$b)
{ $total = array();
  $total = array("a" => "$a", "b" => "$b", "total" => $a+$b);
  return $total;
}

function multiplicacion($a,$b)
{ $total = array();
  $total = array("a" => "$a", "b" => "$b", "total" => $a*$b);
  return $total;
}

function restar($a,$b){
  $total = array();
  $total = array("a" => "$a", "b" => "$b", "total" => $a-$b);
  return $total;
}

function dividir($a,$b){
  $total = array();
  if ($b!=0) 
  $total = array("a" => "$a", "b" => "$b", "total" => $a/$b);
  else
    $total = array("a" => "$a", "b" => "$b",  $total => "Error no se pudo realizar la operación");
  return $total;
}
exit(json_encode($value));
?>
