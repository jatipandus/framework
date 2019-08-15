<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
</head>
<body>
	<h1 align="center" style="font-family: fantasy;">Ini file apaya dipanggil dari controller</h1>
	<h3>Berikut Ini Nama-nama Praktikan :</h3><br>
	<?php foreach ($praktikum as $x) {?>
	<li><?php echo $x;?><</li>
	<?php }?>

	<hr>
	<h3>INi kalo Langsung</h3><br>
	<?php foreach ($praktikum as $y){
		echo '
		<li>' $y '</li>';
		}?>
	}
</body>
</html>