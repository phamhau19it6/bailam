<?php
$connect = mysqli_connect('localhost','root','','tintuc');
		//N?u có l?i x?y ra thì d?ng ?o?n mã và in ra thông báo l?i.
		if(mysqli_connect_errno()!==0)
		{
			die("Error: Could not connect to the database. An error ".mysqli_connect_error()." ocurred.");
		}

mysqli_set_charset($connect,'utf8');
?>


