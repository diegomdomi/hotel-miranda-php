<?php
#Condiciones 

$a = 5;
$b = 10;

if($a > $b){
    echo "a es mayor que b";
}
else if($a == $b){
    echo " a es igual que b";
}
else {
    echo "a es menor que b";
}
echo "<br></br>";

#switch

$dia = "martes";
switch($dia){
    case 'sabado': echo "estudiar php";
    break;

    case 'viernes': echo "fiesta";
    break;

    case 'domingo': echo "descansar";
    break;

    default: echo "ponete a laburar";
}
echo "<br><br> ";
#ciclos
$n = 1;
while($n <= 5 ){
    echo $n;
    $n++;

}

echo "<br><br> ";
$p = 1;
do{
    echo$p;
    $p++;
}
while($p <=5);
#ciclo for
echo "<br><br> ";

for($i = 1 ; $i<=5;$i++){
    echo $i;
}

?>