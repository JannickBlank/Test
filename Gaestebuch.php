<?php 
	$entry = array(
		'from' => 'Heinz',
		'message' => 'Tolles Restaurant'
	);
?>
<DOCTYPE html>
<html>
<head>
<title> Gästebuch </title>
</head>
	<body link="white" vlink="white" alink="gray" style="background-image:url('4.jpg')">
	
	<?php echo $entry ['from'];?>
	<br>
	<?php echo $entry['message'];?>
	
<h1 style="color:white;text-align:center;font-size:100px;">Gästebuch</h1>
<a href="http://localhost/Hauptseite.php"><p style="font-size:23">Zurück</a></p>
	
	</body>
<html/>
