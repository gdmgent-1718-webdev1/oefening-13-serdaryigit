<?php 

	$cars = [
		['Volvo', 12, 22],
		['BMW', 15, 33],
		['Saab', 2, 12],
		['Land Rover', 9, 18],
	];
		sort($cars);
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Oefening 1.13 Output array</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>
<body>
	<table>
		<tr>
			<th>Merk</th>
			<th>Stock</th>
			<th>Verkocht</th>
			<th>Totaal</th>
		</tr>

<?php for ($i = 0; $i < 4; $i++): ?>

		<tr>

        <?php for ($y = 0; $y < 3; $y++): ?>

        <?php if ($cars[$i][1] == 0): ?>

                    <td><?=$cars[$i][$y]?></td>

        <?php else: ?>

                    <td><?=$cars[$i][$y]?></td>

        <?php endif; ?>

        <?php endfor; ?>

                    <td>Totaalprijs</td>
        </tr>

        <?php endfor; ?>

	</table> 

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>