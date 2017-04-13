<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$br1 = $_POST['br1'];
	$br2 = $_POST['br2'];
	$br3 = $_POST['br3'];
} 
function srednjaVrednost($a, $b, $c) {
     $brojac = 3;
	 $rezultat = 0;
     $rezultat = ($a + $b + $c)/$brojac;
     return $rezultat; 
}

header("Content-type: application/json");
$results = array (
	'srednjaVrednost' => srednjaVrednost($br1, $br2, $br3)
	);
echo json_encode($results);
?>