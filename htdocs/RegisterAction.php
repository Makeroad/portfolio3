<?php
$connect = mysqli_connect('localhost', 'root', 'tkavkf93', 'bbs2');
      
$name=$_POST['name'];
$id=$_POST['id'];
$password=$_POST['password'];
$passwordcheck=$_POST['passwordcheck'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$gender=$_POST['gender'];


$checkSQL = "SELECT * FROM `member` WHERE id = '$id';";
$checkresult = $connect->query($checkSQL);
if ($checkresult->num_rows > 0) {
	echo '<script>alert("既に存在するIDです。")</script>';
	echo '<script>window.location="register.php"</script>';
		
}else if ($_POST['name'] == "" || $_POST["id"] == "" || $_POST["password"] == "" || $_POST["passwordcheck"] == "" ||  $_POST['email'] == ""|| $_POST["phone"] == "" || $_POST['gender'] == ""){
	echo '<script>alert("入力されてない項目があります。")</script>';
	echo '<script>window.location="register.php"</script>';
	
}else if($_POST['password']!=$_POST['passwordcheck']){
	echo '<script>alert("パスワードが一致しません。")</script>';
	echo '<script>window.location="register.php"</script>';
}else
        //입력받은 데이터를 DB에 저장
        $query = "insert into member (name,id,password,passwordcheck,email,phone,gender) values ('$name','$id','$password','$passwordcheck','$email','$phone','$gender')";
        $result = $connect->query($query);
if($result) {
	echo '<script>alert("会員登録に成功しました！！")</script>';
	echo '<script>window.location="login.php"</script>';
   }
 ?>
