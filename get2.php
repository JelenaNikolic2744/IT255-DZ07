<?php
//Kupljenje parametara

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
	$br1 = $_GET['br1'];
	$br2 = $_GET['br2'];
}
function hipotenuza($a, $b) {
     $hipotenuza = 0;
     $hipotenuza = sqrt(($a*$a)+($b*$b));
     return $hipotenuza; 
}
header("Content-type: application/json");
$results = array (
	'hipotenuza' => hipotenuza($br1, $br2)
	);
echo json_encode($results);
?>