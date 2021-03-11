<?php
session_start();
$result = session_destroy();
 if($result) {
       echo"<script>";
       echo" history.back()";
       echo"</script>";
}
?>

