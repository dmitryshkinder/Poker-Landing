<?php
header('Content-Type: text/html; charset=utf-8');

$key = 

$post_data = array (
	"entry.1083690906" => $_POST['name'], 
    "entry.1417639382" => $_POST['messager'],
    "entry.249381398" => $_POST['phone'],
);

$url = "https://docs.google.com/...".$key."/formResponse";

// с помощью CURL заносим данные в таблицу google
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
$output = curl_exec($ch);
curl_close($ch);


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<title>Заявка получена!</title>
	<style>
		body {
		    min-width: 320px;
		    background: #303542;
		    font-family: 'Tahoma', sans-serif;
		    font-weight: 400;
		    font-size: 20px;
		    line-height: 24px;
		    color: #fff;
		    cursor: default;
		}
		html, body, .container {
		    height: 100%;
		}
		.container {
		    display: flex;
		    align-items: center;
		    justify-content: center;
		    text-align: center;
		}
	</style>
</head>
<body>

<div class="container">	
		Спасибо <?=htmlspecialchars($_POST['name'])?>, ваша заявка получена!<br> Ссылка на конференцию в Zoom будет отправлена вам в ваш месседжер!
</div>

</body>
</html>