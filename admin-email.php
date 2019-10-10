<?php

$fields = array(
	'from' => $_POST['from'],
	'to' => $_POST['to'],
	'size_of_move' => $_POST['size_of_move'],
	'date_of_move' => $_POST['date_of_move'],
	'first_name' => $_POST['first_name'],
	'last_name' => $_POST['last_name'],
	'phone' => $_POST['phone'],
	'email' => $_POST['email'],
	'booked_from' => 000
	);

$url = ""; 

foreach($fields as $key=>$value) { 
	$fields_string .= $key.'='.$value.'&'; 
}
$fields_string = substr($fields_string, 0, -1);

$ch = curl_init(); 
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, count($fields));
curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);

if (curl_exec($ch)) {
	header("Location: thankyou.php");
}

if(curl_errno($ch))
{
	echo '<br/>error:' . curl_error($ch);
}

curl_close($ch);

?>