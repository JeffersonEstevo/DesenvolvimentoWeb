<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Curso PHP</title>
	</head>

	<body>

		<?php
			
		$itens = array('sofá', 'mesa', 'cadeira', 'fogão', 'geladeira');

		echo '<prev>';
			print_r($itens);
		echo '</prev>';

		echo'<br>';

		foreach ($itens as $item ) {
			echo "$item ";

			if($item == 'mesa'){
				echo ' (*Compre uma mesa e ganhe 25% de desconto na compra de 4 cadeiras)';

			}
			echo'<br>';
		}

		?>

		

	</body>
</html>