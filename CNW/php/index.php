<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@600&family=JetBrains+Mono:wght@100&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@600&display=swap" rel="stylesheet">
        <title>Document</title>
</head>
<body>
    <div class="nav1" >
        <ul>
            <a href="#session1">
                <li>HOME</li>
            </a>
            <a href="#session2">
                <li>SERVICES</li>
            </a>
            <a href="#session3">
                <li>ABOUT</li>
            </a>
            <a href="#session4">
                <li>WORK</li>
            </a>
            <a href="#session5">
                <li>CONTACT</li>
            </a>
        </ul>
    </div>
    <div class="top" id="session1">
    <?php 
        include("connect.php");
        $sql = "SELECT * FROM me";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0 ){
            $ava = mysqli_fetch_all($result);
        }
    ?>
        <div class="content">
        <?php foreach($ava as $ava ){?> 
            <?php echo'<img class="ava" src="data:me;base64,'.base64_encode($ava[4]).'">';?> 
            <p class="name">I'm <?php echo $ava[1] ?></p>
            <p class="info"><?php echo $ava[8] ?></p>
            <?php } ?>
        </div>
    </div>
    <div class="services" id="session2">
    <?php 
        include("connect.php");
        $sql = "SELECT * FROM works";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0 ){
            $work = mysqli_fetch_all($result);
        }
    ?>
      <?php foreach($work as $w ){?> 
        <div class="content">
            <?php echo'<img src="data:me;base64,'.base64_encode($w[5]).'">';?> 
            <p class="name1"><?php echo $w[2] ?></p>
            <P class="info3"><?php echo $w[4] ?></P>
        </div>
        <?php } ?>
    </div>
    <p class="name1" id="session3" style="padding-top:70px ;">ABOUT ME</p>
    <img class="shape" src="../image/shape.png" alt="">

    <?php 
        include("connect.php");
        $sql = "SELECT * FROM skills";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0 ){
            $name = mysqli_fetch_all($result);
        }
    ?>

    <div class="about">  
     
        <div class="container1">
        <?php foreach($name as $n ){?>  
            <p><?php echo $n[3] ?></p>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: <?php echo $n[4] ?> ;background-color: rgb(176, 127, 110);" aria-valuenow="25" aria-valuemin="0"
                        aria-valuemax="100"><?php echo $n[4] ?>
                    </div>
                </div>
           <?php } ?>
        </div>
        
        <div class="container1" class="info1">
        <?php foreach($name as $n ){?>  
            <p><?php echo $n[2] ?></p>
            <?php } ?>
        </div>

       
    </div>
    <p class="name1" id="session4" style="padding-top:70px ;">LATEST WORKS</p>
    <img class="shape" src="../image/shape.png" alt="">
    <?php 
        include("connect.php");
        $sql = "SELECT * FROM image";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0 ){
            $anh = mysqli_fetch_all($result);
        }
    ?>

    <div class="work">
        <?php foreach($anh as $a ){
            ?>           
            <?php echo'<img class="imgWork" src="data:image;base64,'.base64_encode($a[2]).'">';?> 
        <?php } ?>
    </div>
    <div class="hr1"></div>
    <p class="name1" style="padding-top:70px;">CONTACT</p>
    <img class="shape" src="/image/shape.png" alt="">
    <div class="contact">
    <?php 
        include("connect.php");
        $sql = "SELECT * FROM me";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0 ){
            $info = mysqli_fetch_all($result);
        }
    ?>
    	<div class="row">
        <?php foreach($info as $in ){?> 
            <div class="col-md-4" class="inputContainer">
                
                    <p class="big">NAME</p>
                    <p class="min"> <?php echo $in[1]?> </p>
                    <p class="big">EMAIL</p>
                    <p class="min"> <?php echo $in[2]?> </p>
                    <p class="big">PHONE</p>
                    <p class="min">+84 <?php echo $in[6]?> </p>
              
            </div>
            <?php } ?>
            <div class="col-md-4" >
                <div class="inputContainer">
                <input class="input1" type="text" placeholder="NAME">
                <input class="input1" type="text" placeholder="EMAIL">
                <input class="input1" type="text" placeholder="SUBJECT">
            </div>
            </div>
            <div class="col-md-4">
                <div class="inputContainer">
                    <textarea rows="4" cols="50" placeholder="MESSAGE"></textarea>
                    <input class="button1" type="button" value="SEND MESSAGE">
                </div>
            </div>
        </div>
       
    </div>
    <div class="footer" id="session5">
        <p class="name1" style="padding-top:30px ;">FOLLOW ME ON HERE</p>
        <?php 
        include("connect.php");
        $sql1 = "SELECT * FROM iconcontact";
        $result = mysqli_query($conn, $sql1);
        if(mysqli_num_rows($result) > 0 ){
            $anh1 = mysqli_fetch_all($result);
        }
    ?>

    <div class="iconContact">
        <?php foreach($anh1 as $b ){
            ?>
        <a href="<?php echo $b[2] ?>"><?php echo'<img  src="data:img;base64,'.base64_encode($b[1]).'">';?></a>
            <?php } ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>

</html>1                        