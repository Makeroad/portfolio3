<?php
 
        session_start();
 
        $connect = mysqli_connect("localhost", "root", "tkavkf93", "bbs2") or die("fail");
 
        //입력 받은 id와 password
        $id=$_POST['id'];
        $pw=$_POST['password'];
 
        //아이디가 있는지 검사
        $query = "select * from member where id='$id'";
        $result = $connect->query($query);
 
 
        //아이디가 있다면 비밀번호 검사
        if(mysqli_num_rows($result)==1) {
 
                $row=mysqli_fetch_assoc($result);
 
                //비밀번호가 맞다면 세션 생성
                if($row['password']==$pw){
                        $_SESSION['id']=$id;
                        $_SESSION['name']=$row['name'];
                        $_SESSION['email']=$row['email'];
                        $_SESSION['phone']=$row['phone'];
                        if(isset($_SESSION['id'])){
                        ?>      <script>
                                        alert("ログイン出来ました！！");
                                        location.replace("./index.php");
                                </script>
<?php
                        }
                        else{
                                echo "session fail";
                        }
                }
 
                else {
        ?>              <script>
                                alert("ID又はパスワードが一致しません");
                                history.back();
                        </script>
        <?php
                }
 
        }
 
                else{
?>              <script>
                        alert("ID又はパスワードが一致しません");
                        history.back();
                </script>
<?php
        }
 
 
?>
 