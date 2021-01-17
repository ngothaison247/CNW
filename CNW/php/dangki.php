<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <style>
        .cake{
    background:url("https://i.pinimg.com/564x/cf/68/6f/cf686feb6d10c5a3bbb9f98dc39be018.jpg");
    width: 100%;
    height: 650px;
    display: flex;
    align-items: center;
    justify-content: space-around;
    background-repeat: no-repeat;
    background-color: #f8f3f0;
    background-position: left; 
        }
    .logInform{
    background-color: #b8a192ad;
    padding: 50px 20px 70px 20px;
    }
    .logInform h3{
    text-align: center;
    font-size: 32px;
    margin-bottom: 20px;
    color: #663827;
    }
    .logInform .input6 {
    width: 200px;
    padding: 7px;
    margin: 5px;
    border: none;
    border-radius: 5px;
    }
    .btn1{
    width: 215px;
    padding: 7px;
    background-color: #8b4f39;
    border: none;
     margin: 5px;
    border-radius: 5px;
    color: #f3eae7;
    }
    </style>
    <title>Đăng kí</title>
</head>

<body>
    <div class="cake">
    <form action="dangki1.php" method="post" >
        <div class="logInform">
            <div class="formInput">
                <h3>Đăng kí</h3>
                <input class="input6" type="text" placeholder="Email" name="email"><br>
                <input class="input6" type="password" placeholder="Password" name="pass"><br>
                <input class="input6" type="text" placeholder="Username" name="user"><br>
                <input class="input6" type="text" placeholder="Title" name="title"><br>
                <input class="input6" type="text" placeholder="Address" name="add"><br>
            </div>
            <input class="btn1" type="submit"  value="Save">
        </div>
    </form>
    </div>
</body>

</html>