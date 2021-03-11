<?php
$connect = mysqli_connect('localhost', 'root', 'tkavkf93', 'bbs2');
include 'loginsession.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require "PHPMailer-master/src/PHPMailer.php";
require "PHPMailer-master/src/SMTP.php";
require "PHPMailer-master/src/Exception.php";

$omise=$_POST['omise'];
$date=$_POST['date'];
$time=$_POST['time'];
$num_guests=$_POST['num_guests'];
$comments=$_POST['comments'];
 
if ($omise == "" || $date == ""|| $time == "" ||$num_guests == "" ){
	echo '<script>alert("入力されてない項目があります。")</script>';
	echo '<script>window.location="Yoyaku.php"</script>';
}else
//입력받은 데이터를 DB에 저장
$query = "insert into yoyaku (omise,date,time,num_guests,comments) values ('$omise','$date','$time','$num_guests','$comments')";
$result = $connect->query($query);


$mail = new PHPMailer(true); 

try {


// 서버세팅 
//디버깅 설정을 0 으로 하면 아무런 메시지가 출력되지 않습니다
$mail -> SMTPDebug = 0; // 디버깅 설정
$mail -> isSMTP(); // SMTP 사용 설정

// 지메일일 경우 smtp.gmail.com, 네이버일 경우 smtp.naver.com
$mail -> Host = "smtp.gmail.com";               // 네이버의 smtp 서버
$mail -> SMTPAuth = true;                         // SMTP 인증을 사용함
$mail -> Username = "pledudrb@gmail.com";    // 메일 계정 (지메일일경우 지메일 계정)
$mail -> Password = "tkavkf93A!";                  // 메일 비밀번호
$mail -> SMTPSecure = "ssl";                       // SSL을 사용함
$mail -> Port = 465;                                  // email 보낼때 사용할 포트를 지정
$mail -> CharSet = "utf-8"; // 문자셋 인코딩

 

// 보내는 메일

$mail -> setFrom("pledudrb@gmail.com", "Master");
// 받는 메일
$mail -> addAddress("kiser0182002@naver.com", "receive01");
$mail -> addAddress ($_SESSION['email'], "receive02");

// 첨부파일

// $mail -> addAttachment("./test1.zip");

// $mail -> addAttachment("./test2.jpg");

// 메일 내용

$mail -> isHTML(true); // HTML 태그 사용 여부
$mail -> Subject = "もぐもぐ美味しい上手い！からの予約確認メールです";  // 메일 제목
$mail -> Body = "店名:$omise,<br>名前:$_SESSION[name],<br>来店日:$date,<br>時間,$time,<br>人数,$num_guests,<br>電話番号:$_SESSION[phone],<br>要求事項,$comments";
   // 메일 내용

 

// Gmail로 메일을 발송하기 위해서는 CA인증이 필요하다.

// CA 인증을 받지 못한 경우에는 아래 설정하여 인증체크를 해지하여야 한다.

$mail -> SMTPOptions = array(

  "ssl" => array(
  "verify_peer" => false
  , "verify_peer_name" => false
  , "allow_self_signed" => true
  )
);

// 메일 전송
$mail -> send();

echo '<script>alert("予約が完了しました！！！！")</script>';
echo '<script>window.location="index.php"</script>';
} catch (Exception $e) {
echo "Message could not be sent. Mailer Error : ", $mail -> ErrorInfo;
}
?>
