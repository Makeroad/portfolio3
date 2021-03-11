 <?php
 $connect = mysqli_connect('localhost', 'root', 'tkavkf93', 'bbs2'); 
 
if(!$connect) die('Not connected : ' . mysqli_error()); 
 
mysqli_close($connect);
?> 


