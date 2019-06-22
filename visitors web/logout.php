<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Untitled Document</title>
</head>

<body>
   <?php
   session_start();
   session_destroy();
   $redirect="Location:../web3/author_login.php";
   echo header($redirect);

    ?>
</body>
</html>
