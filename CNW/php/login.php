
<?php
include 'connect.php';
    if(isset($_POST['email'])&& !empty($_POST['email']) && isset($_POST['pass']) && !empty($_POST['pass'])){
        $sqli = "SELECT * from login where email = '" . $_POST['email'] . "'";
        $resulti = mysqli_query($conn,$sqli);
        $rows = mysqli_fetch_assoc($resulti);
        if(!$rows){ ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
            <link rel="stylesheet" href="style.css">
        </head>
        <body>
            <div class ="haha">
            <H3>Sai Email</H3>
            </div>
        </body>
        </html>

<?php
        include 'trangchu.php';
        }
        else{
            if($rows['pass'] == $_POST['pass']){
               include 'index.php';
                }
            else{
                echo '<H3>Sai Password</H3>';
                require 'trangchu.php';
            }
        }
        
    }
    else {
        echo '<H3>Nhập đầy đủ thông tin</H3>';
        require 'trangchu.php';
    }

?>