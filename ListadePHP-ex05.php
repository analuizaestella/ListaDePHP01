<?php
$h1 = 1.70;
$idade1 = 18;
$sexo1 = "F";

$h2 = 1.98;
$idade2 = 17;
$sexo2 = "F";

$h3 = 1.72;
$idade3 = 12;
$sexo3 = "M";

$ctrl = 0;
$cont = 0;
while ($cont<5) {
	if ($h1<$h2) {
		$ctrl = $h1;
		$h1 = $h2;
		$h2 = $ctrl;
	} else if ($h2<$h3) {
		$ctrl = $h2;
		$h2 = $h3;
		$h3 = $ctrl;
	}
	$cont++;
}
if ($sexo1=="F") {
}
echo "A maior altura é: ".$h1.", e a menor altura é: ".$h3;
  ?> 