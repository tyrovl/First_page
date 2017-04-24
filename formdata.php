<?php

	$result = mail ("tyrovl.work@gmail.com","Анкета Сайта","С сайта была получена анкета с такими данными: \nИмя:$_POST[name] \nПароль:$_POST[password]");
	if ($result) {
		echo "<p>Сообщение отправлено</p>";
		}
		else {
			echo "<p>Сообщение не отправлено</p>";
		}
?>