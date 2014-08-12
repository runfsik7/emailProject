<?php
	$email = trim($_POST['email']);
	$email = str_replace(' ', '', $email);
	$exist = 0;
	
	$file1 = "mailContainer.csv";
	$lines = file($file1);

	foreach($lines as $line_num => $line)
	{
		if(trim($line) === $email) $exist = 1;
	}
	
	if($exist == 1){
		echo '1';
	}else{
		$file = 'mail_list_container.csv';
		$current = file_get_contents($file);
		$current .= $email."\n";
		file_put_contents($file, $current);
		echo '0';
		
		$to = $email;
		$subject = 'TheFutureTransport';
		$from = 'info@TheFutureTransport.com';

		$message ='<!DOCTYPE html">';
		$message.='<html>';
		$message.='<head>';
		$message.='<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />';
		$message.='<title>TheFutureTransport</title>';
		$message.='<meta name="viewport" content="width=device-width, initial-scale=1.0"/>';
		$message.='</head>';
		$message.='<body style="background-color: #eee;" >';	
		$message.='<table border="0" cellpadding="0" cellspacing="0" style="width: 50%; margin: 0 auto;" >';
		$message.='<tr>';
		$message.='<td style="text-align: center; padding: 30px 0;">';
		$message.= '<img src="http://thefuturetransport.com/img/thefuturetransport.png" width=448 height=24 style="display: inline;" />';
		$message.='</td>';
		$message.='</tr>';
		$message.='<tr>';
		$message.='<td style="width: 50%;text-align: justify;overflow: hidden;">';
		$message.= "<h1>CONGRATULATIONS!</h1>";
		$message.= "<p>You’ve just got one step closer to the future. The wheel you saw today is a breakthrough in electrical transportation. Very soon it would be a hallmark of London!</p>";
		$message.= "<p>We put final draws and soon will be launching finalised website.</p>";
		$message.= "<p>Be the first to benefit from the wheel, by using our special <b>10% discount</b> for adventurers just like you. Simply mention XXXX code when you order it.</p>";
		$message.= "<p>Stay tuned and we will provide more information soon.</p>";
		$message.= "<p><i>Firstwheel team.</i></p>";
		$message.='</td>';
		$message.='</tr>';
		$message.='</table>';
		$message.='</body>';	
		$message.='</html>';			
		$headers .= 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
		$headers .= 'From: '.$from.'' . "\r\n" .
			'Reply-To: From: '.$from.'' . "\r\n" .
			'X-Mailer: PHP/' . phpversion();
		//mail($to, $subject, $message, $headers) OR die();
		
	}

?>
