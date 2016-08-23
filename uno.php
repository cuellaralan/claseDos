<html>
<head>
	<title></title>
</head>
<body>

<?php 
	
	$suma =0;
	$numeros =0;

	for ($i=1 ; $suma < 1000 ; $i++ ) 
	{ 
		if ($suma + $i > 1000) 
		{
			break;
		}
		$suma = $suma + $i ;
		$numeros++ ;
	}

	echo "la suma es ".$suma;
	echo "<br>";
	echo "se sumaron".$numeros."numeros";
 ?>

</body>
</html>