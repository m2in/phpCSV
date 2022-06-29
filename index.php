<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Read CSV-files | test</title>
</head>
<body>
	<?php
		echo '<pre>';
		if (($file = fopen("https://cloud.mail.ru/public/6t5f/tKYF1XGF8", "r")) !== false){
			while (($data = fgetcsv($file, 1000, "," )) !== false) {
				print_r($data);
				echo '<hr>';
			}
			fclose("https://cloud.mail.ru/public/6t5f/tKYF1XGF8");
		}
	?>
</body>
</html>