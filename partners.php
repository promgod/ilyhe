<?php
session_start();
if (isset($_SESSION['auth'])!==true){
    header( 'Location:http://learner18.creativityprojectcenter.ru/auth.php');
}
if (($_SESSION['login']=='') & ($_SESSION['login']=='')){
    $_SESSION['stop_api']=0;
}else{$_SESSION['stop_api']=1;}
?>
<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <title>Склад строительных материвлов</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@500&display=swap" rel="stylesheet">
    <style>
        html{
            scroll-behavior: smooth;
            font-family: 'Comfortaa', cursive;
        }
        body {
            display: grid;
            grid-template-areas:
        "header header"
        "article ads"
        "footer footer";
            grid-template-rows: 0.1fr 1fr 0.2fr;
            grid-template-columns: 1fr 15% ;
            height: 200vh;
            margin: 0;
        }
        header, footer, article, nav, div {
            padding: 20px;
        }
        .menu{
            background-color:#EAE7DC;
            border:medium solid  #9e9d9a;
        }
        header{
            background-color: #D8C3A5;
            display: grid;
            grid-template-columns:1fr 1fr 1fr 1fr 1fr;
            grid-template-rows: 0.3fr 1fr;
            text-align: center;
            grid-gap: 1em;
            position: sticky;
            top: 0;

        }
        .welcome{
            grid-column: 1/6;
            color: #8E8D8A;
        }
        footer{
            background-color: #E85A4f;
            text-align: center;
            position: relative;
        }
        article{
            color: #ed8074;
            background-color:#EAE7DC;
            display: grid;
            grid-template-rows: 0.3fr 1fr 1fr 1fr 1fr;
            grid-template-columns: 1fr 1fr 1fr 1fr 1fr;

            align-items: center;
            justify-items: center;
        }
        .start{
            grid-column: 1/6;
        }

        .progr{
            grid-column: 1/3;
            grid-row: 2/4;
        }
        .postav{
            grid-column: 1/3;
            grid-row: 4/6;
        }
        .postavtext{
            grid-column: 3/6;
            grid-row: 5/6;
            font-size: x-large;
        }
        .progtext{
            grid-column: 3/6;
            grid-row: 3/4;
            font-size: x-large;
        }

        #pageHeader {
            grid-area: header;
        }
        #pageFooter {
            grid-area: footer;
        }
        #mainArticle {
            grid-area: article;
        }

        #siteAds {
            grid-area: ads;
            color:#E85A4f;
            background-color:#E9AD94;
        }
        img{
            width: 300px;
            height: 300px;
        }

        A {
            color:#8E8D8A;
            text-decoration: none;
        }
        A:visited {
            color: #8E8D8A;
            text-decoration: none;
        }
        A:active {
            color:#8E8D8A;
            text-decoration: none;
        }

    </style>
</head>

<body>
    <header id="pageHeader" >
        <div class="welcome">
            OOO "КИС-КИС"&nbsp;&nbsp;&nbsp;
            Здравствуйте,
            <?php
            if($_SESSION['login']!==""){echo $_SESSION['login'];}
            else{echo 'не хотите зайти с своего аккаунта?';}
            ?>
            <a href="auth.php" <?php $_SESSION['destroy']=1; ?> >,выход</a>
        </div>
        <div class="menu"><a href="index.php">Главная</a></div>
        <div class="menu"><a href="parters.php">Наши партнёры</a></div>
        <div class="menu"><a href="">Новости</a></div>
        <div class="menu"><a href="index.php#pageFooter">Контактная информация</a></div>
    </header>
    <article id="mainArticle">
        <div class="start">
            <h1>Наши Партнёры</h1>
        </div>
        <div class="progr">
            <h2>Frontend разработчик</h2>
            <img src="vk.jpg" alt="фото с вк">
        </div>
        <div class="progtext">
            <p>Всем привет, меня зовут Илья. Я являюсь творцом данного сайта. В данный момент он находиться в разработке.
            Со всеми вопросами и предложениями писать сюда <a href="https://vk.com/callmeilya">https://vk.com/callmeilya</a>.</p>
        </div>
        <div class="postav">
            <h2>Наш крупнейший поставщик</h2>
            <img src="knauf.png" alt="фото с вк">
        </div>
        <div class="postavtext">
            <p>Фирма Knauf является нашим крупнейшим поставщиком. Мы работаем вместе около 10 лет, и за это время прекрасная немецкая компания ни разу нас не подводила.</p>
        </div>
    </article>
    <div id="siteAds">здесь может быть ваша реклама</div>
    <footer id="pageFooter">
        <h2>Контакты:<br>
            <br>
            +89674491232 <br>
            <br>
            ivaflyry@gmail.com
        </h2>
    </footer>
</body>
</html>