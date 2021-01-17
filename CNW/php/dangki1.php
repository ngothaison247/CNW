<?php
if(isset($_GET['id'])){
   require 'connect.php';
   $sql = "SELECT * from login where email = '" . $_GET['id'] . "'";
   $result = mysqli_query($conn,$sql);
   $rows = mysqli_fetch_assoc($result);
     ?>

<?php
} else {
    if(isset($_POST['email']) && !empty($_POST['email'])){
    require 'connect.php';
    //kiem tra email trung khong
    $sqli = "SELECT * from login where email = '" . $_POST['email'] . "' ";
    $resulti = mysqli_query($conn,$sqli);
    $rows = mysqli_num_rows($resulti);
     if($rows>0){
      echo '<script language="javascript">';
      echo 'alert("Email đã tồn tại")';
      echo '</script>';
      require 'dangki.php';
     }else{
//tao tai khoan
         $sql = "INSERT into login(id,email,pass,username,title,code,address,status) values(null,'" . $_POST['email'] . "','" . $_POST['pass'] . "','" . $_POST['user'] . "','" . $_POST['title'] . "',1,'" . $_POST['add'] . "',1)";
         $result = mysqli_query($conn,$sql);
         echo '<script language="javascript">';
                echo 'alert("Tạo tài khoản thành công")';
                echo '</script>';
                require 'trangchu.php';
      }
    }
  }
 ?>