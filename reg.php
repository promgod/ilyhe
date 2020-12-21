<?php
session_start();
if (isset($_SESSION['auth'])){
    header('Location: http://learner18.creativityprojectcenter.ru/index.php');
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <style>
        *{
            font-family: 'Roboto', sans-serif;
            padding: 0;
            margin: 0;
            text-align: center;
            font-size: 20px;
        }
        .log{
            font-size: 25px;
        }
        .author{
            max-width: 90px auto;
            position: absolute  ;
            width: 351px;
            height: 310px;
            left: 784px;
            top: 137px;
            background: #FFE4B5;
        }
        .in{
            border: none;
        }
        .source{
            margin-right: 15px;
            text-align: right;


        }
    </style>
</head>
<body>
<div class="author">
    <form action="api.php" method="post">
        <p>
            <input type="hidden" name="module" value="reg">
        <div class="log">Registration to Calculator<br></div>
        <input class="in" placeholder="Login" name="login" type="text" >
        </p>
        <p>
            <input class="in" name="password" placeholder="Password" type="password" >
        </p>
        <p>

            <button class="btn btn-primary" type="submit">Register</button>

        <div class="not_reg">
            <?php
            if(isset($_SESSION['not_reg'])){echo 'User is already exist';}
            unset($_SESSION['not_reg']);
            ?>
        </div>
        <br>
        <div class="source"><a  href="auth.php">already registered?</a></div>
        </p></form>
    <br>
</div>
</body>
</html>