<?php 
$result = mail('fallystall@gmail.com', 'subject', 'message', 'dasdasdsa');

if($result)
{
	echo 'письмо отправилось';
}
else
{
	echo 'что-то не так';
}