<?php
$connect = mysqli_connect('localhost','root','','tintuc');
		//N?u c� l?i x?y ra th� d?ng ?o?n m� v� in ra th�ng b�o l?i.
		if(mysqli_connect_errno()!==0)
		{
			die("Error: Could not connect to the database. An error ".mysqli_connect_error()." ocurred.");
		}

mysqli_set_charset($connect,'utf8');
?>


