<?php
$var = "Bill Gates";
$tipo = gettype($var);
echo "$var .($tipo).<br>";
$var = 12;
$tipo = gettype ($var);
echo "$var ($tipo)<br>";
$var = 3.1415;
$tipo = gettype ($var);
echo"$var ($tipo)<br>";
$var = true;
$tipo = gettype ($var);
echo "$var ($tipo)<br>";
?>

<?php
$var = null;
 if(is_null($var)) {
 echo "Variável \$var é nula/vazia!<br>";
 }
 $var = "Bill GAtes";
 if(is_string($var)) {
 echo "Variável \$var é uma string!<br>";
 }
 $var = 12;
 if(is_integer($var)) {
 echo "Variável \$var é um inteiro!<br>";
 }
 $var = false;
 if(is_bool($var)) {
 echo "Variável \$var é booleana!<br>";
 }
 $var = 7.85435244;
 if(is_float($var)) {
    echo"Variável \$var é float". "<br>" ;
}
?>


<?php 
$nota[0] = 1;
$nota[1] = 2;
$nota[2] = 3;
$nota[3] = 4;

echo "A primeira nota foi " . $nota[0] . "<br>";
echo "A segunda nota foi " . $nota[1] . "<br>";
echo "A terceira nota foi " . $nota[2] . "<br>";
echo "A quarta nota foi " . $nota[3] . "<br>";

$war = "Exemplo de variável";
var_dump($nota);
?>
